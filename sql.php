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
// Тут необходимо проверить, существует ли база данных и таблица. Если нет, то необходимо ее создать.
// Создаем таблицу "Комментарии"
$sql = "CREATE TABLE comments (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
comment TEXT
)";
*/

// Подготавливаем данные для формирования SQL запросов
$name = $_POST['name'];
$email = $_POST['e-mail'];
$comment = $_POST['comment'];


// Вносим данные в таблицу
$sql = "INSERT INTO comments (name, email, comment)
VALUES ('$name', '$email', '$comment')";

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