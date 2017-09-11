<?php

header('Content-type: text/html; charset=UTF-8');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "honeyhunters";

// Создаем подключение
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Проверяем подключение
if (!$conn) {
    die("Ошибка подключения к базе данных: " . mysqli_connect_error());
}

// Устанавливаем  кодировку подключение UTF-8
mysqli_set_charset($conn,"utf8");

// Формируем запрос на получение данных данных
$sql = "SELECT * FROM comments";
$result = mysqli_query($conn, $sql);

// Отключаемся от базы данных
mysqli_close($conn);

?>