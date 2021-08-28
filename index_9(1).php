<?php

// Запросы к БД MYSQL при помощи PHP (PDO)
// Подготовленные запросы

// Подключение к mysql
$connection = new PDO("mysql:host=localhost;dbname=mysite;charset=utf8", "root", '$Zxcvbnm@123');

$name = 'Andrey';
$age = 34;
$login = 'Andr777';

// Запись данных
$sql = "INSERT users (name, age, login) VALUE (:n, :age, :login)";  // готовим запрос с плейсхолдерами
$query = $connection->prepare($sql);  // подготавливаем сам запрос

$query->execute(['n'=>$name, 'age'=>$age, 'login'=>$login]); // https://www.php.net/manual/ru/pdo.exec.php

// https://www.php.net/manual/ru/pdo.connections.php