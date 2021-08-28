<?php

// Запросы к БД MYSQL при помощи PHP (PDO)

// Подключение к mysql
$connection = new PDO("mysql:host=localhost;dbname=mysite;charset=utf8", "root", '$Zxcvbnm@123');

// запрос данных
$query1 = 'SELECT * FROM users';
$result = $connection->query($query1);

// Запись данных
$query2 = "INSERT users (name, age, login) VALUE ('Игорь', 29, 'Igrok')";
$count = $connection->exec($query2); // https://www.php.net/manual/ru/pdo.exec.php

echo $count;

// https://www.php.net/manual/ru/pdo.connections.php