<?php

// Запросы к БД MYSQL при помощи PHP (PDO)
// Подготовленные запросы

// Подключение к mysql
$connection = new PDO("mysql:host=localhost;dbname=mysite;charset=utf8", "root", '$Zxcvbnm@123');

$name = 'Olga';
$age = 21;
$login = 'OLy777';

$param = [
    'n' => $name,
    'age' => $age,
    'l' => $login
];

// Запись данных
$sql = "INSERT users (name, age, login) VALUE (:n, :age, :l)";  // готовим запрос с плейсхолдерами
$query = $connection->prepare($sql);  // подготавливаем сам запрос

$query->execute($param); // https://www.php.net/manual/ru/pdo.exec.php

// https://www.php.net/manual/ru/pdo.connections.php