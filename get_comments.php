<?php

require 'db_login.php';

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

// Проверяем наличие данных
if (mysqli_num_rows($result) > 0) {
    // Отображаем данные
    while($row = mysqli_fetch_assoc($result)) {	
		echo '<div class="row comment-avtor-gray">';
		echo '<p class="text-center">' . $row["name"] . '</p>';
		echo '</div>';
		echo '<div class="row comment-email-gray">';
		echo '<p class="text-center">' . $row["email"] . '</p>';
		echo '</div>';
		echo '<div class="row comment-text-gray">';
		echo '<p class="text-center">' . $row["comment"] . '</p>';
		echo '</div>';
    }
} else {
    echo "Нет комментариев";
}

// Отключаемся от базы данных
mysqli_close($conn);

?>