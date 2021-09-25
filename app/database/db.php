<?php

require 'connect.php';

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '<pre>';
}

// Проверка выполнения запроса к БД
function dbCheckError($query) {
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}

// Запрос на получение данных с одной таблицы
function selectAll($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";
    
    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
               $value = "'".$value."'"; 
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
//    tt($sql);
//    exit();
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

// Запрос на получение одной строки с выбранной таблицы
function selectOne($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";
    
    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
               $value = "'".$value."'"; 
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
            $i++;
        }
    }
//    $sql = $sql . " LIMIT 1";
//    tt($sql);
//    exit();
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

$params = [
    'admin' => 1,
    'username' => 'Some'
];

//tt(selectAll(users, $params));
//tt(selectOne(users));

//Запись в таблицу БД
function insert($table, $params) {
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value){
        if ($i === 0) {
            $coll = $coll . "$key";
            $mask = $mask . "'$value'";
        } else {
            $coll = $coll . ", $key";
            $mask = $mask . ", '$value'";
        }
        $i++;
    }
    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
//    tt($sql);
//    exit();
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

$arrData = [
    'admin' => '0',
    'username' => 'andrey4322',
    'email' => 'andr23111@re.com',
    'password' => 'pssgq65toigfsqrfa23'
];

insert(users, $arrData);
