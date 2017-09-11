<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "honeyhunters";

// Создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем подключение
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
} 

/*
// Тут необходимо проверить, существует ли таблица. Если нет, то необходимо ее создать.
// Создаем таблицу "Комментарии"
$sql = "CREATE TABLE comments (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name NVARCHAR(30) NOT NULL,
email NVARCHAR(50) NOT NULL,
comment NVARCHAR(4000) NOT NULL
)";
*/

// Подготавливаем данные для формирования SQL запросов
$name = clean_input($_POST['name']);
$email = clean_input($_POST['email']);
$comment = clean_input($_POST['comment']);

// Формируем запрос на запись данных
$sql = "INSERT INTO comments (name, email, comment)
VALUES (N'$name', '$email', N'$comment')";

// Отправляем запрос серверу и проверяем ответ
if ($conn->query($sql) === TRUE) {
    echo "Новая запись успешно создана";
} else {
	echo "Возникла ошибка при сзаписи: " . $sql . "<br>" . $conn->error;
}

// Отключаемся от базы данных
$conn->close();

// Функция для преобразования введенных пользователем данных в целях безопасности и избавления от сторонних элементов.
function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>