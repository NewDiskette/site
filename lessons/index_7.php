<?php

// Запросы к БД MYSQL при помощи PHP

require_once 'asset/setting.php';

// Подключение к mysql
$connection = new mysqli($host, $user, $pass, $data);

// Проверка
if ($connection->connect_error) {
    die('Error connection');
}

// запрос данных
$query1 = 'SELECT * FROM users';
$result = $connection->query($query1);

// Проверка
if (!$result) {
    die('Error result');
}

$rows = $result->num_rows;
for ($i = 0; $i < $rows; $i++) {
    $result->data_seek($i);
    //echo 'ID: ' . $result->fetch_assoc()['id_user'] . '<br>';
    echo 'Name: ' . $result->fetch_assoc()['name'] . '<br>';
}


echo '<pre>';
print_r($result);
echo '</pre>';

echo '<pre>';
print_r($rows);
echo '</pre>';


$result->close();
$connection->close();
