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
function insert($table) {
    global $pdo;
    $sql = "INSERT INTO $table (`admin`, `username`, `email`, `password`) VALUES (:adm, :user, :mail, :pass)";
    
    $arrData = [
        'adm' => '0',
        'user' => '122',
        'mail' => 'r111@re.com',
        'pass' => 'pqtoi[qr[fa;23'
    ];
    $query = $pdo->prepare($sql);
    $query->execute($arrData);
    dbCheckError($query);
}

insert(users);