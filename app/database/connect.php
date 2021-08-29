<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'site';
$db_user = 'root';
$db_pass = '$Zxcvbnm@123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO(
        "$driver:host=$host;dbname=$dbname;charset=$charset",
        $db_user, $db_pass, $options
    );
} catch (PDOException $i) {
    die("Ошибка подключения к БД");
}