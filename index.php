<!DOCTYPE HTML>  
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container background-black">

<div class="row">

		<div class="col-sm-2 col-md-offset-3">
			<p><img src="images/logo_big.png" alt="Honey Hunters logo"></p>
		</div>
		
		
</div>

<div class="row">
		
		<div class="col-sm-2 col-md-offset-5">
			<p><img src="images/contact_icon.png" alt="Honey Hunters logo"></p>
		</div>
		
</div>

	<form name="form" action="sql.php" method="post">

		<div class="row">
			
			<div class="col-sm-3 col-md-offset-3">

				<div class="form-group required">
					<label for="name" class='control-label'>Имя</label>
					<input type="text" class="form-control" name="name" required="required">
				</div>

				<div class="form-group required">
					<label for="email" class='control-label'>E-mail</label>
					<input type="email" class="form-control" name="email" required="required">
				</div>
		
			</div>
		
			<div class="form-group required">
				<div class="col-sm-3">
					<label for="comment" class='control-label'>Комментарий</label>
					<textarea class="form-control" rows="5" name="comment" required="required"></textarea>
				</div>
			</div>
		
		</div>

		<div class="row top-buffer bottom-buffer">
			<div class="col-md-1 col-md-offset-8">
				<button type="submit" class="btn btn-default button">Записать</button>
			</div>
		</div>

	</form>

</div>

<div class="container top-buffer">

	<div class="row">
			<div class="col-md-3 col-md-offset-5">
				<button type="submit" class="btn btn-default button" onclick="getComments()">Выводим комментарии</button>
			</div>
	</div>
	
<?php

// В файле осуществляется подключение к базе данных и получение данных
require 'getcomments.php';

// Проверяем наличие данных
if (mysqli_num_rows($result) > 0) {
    // Отображаем данные
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"] . "<br>";
		echo "Email: " . $row["email"] . "<br>";
		echo "Comment: " . $row["comment"] . "<br>";
    }
} else {
    echo "Нет комментариев";
}

?>
	
	<div class="row">
	
		<div class="col-sm-2 col-md-offset-3 top-buffer">
			<div class="col-sm-12">
			
				<div class="row comment-avtor-gray">
					<p class="text-center">Вася</p>
				</div>
				<div class="row comment-email-gray">
					<p class="text-center">vasya@mail.ru</p>
				</div>
				<div class="row comment-text-gray">
					<p class="text-center">Сообщение от Василия Пупкина.</p>
				</div>
				
			</div>
		</div>
		
		<div class="col-sm-2 top-buffer">
			<div class="col-sm-12">
			
				<div class="row comment-avtor-green">
					<p class="text-center">Маруся</p>
				</div>
				<div class="row comment-email-green">
					<p class="text-center">marusia@mail.ru</p>
				</div>
				<div class="row comment-text-green">
					<p class="text-center">Всем привет, я Маруся</p>
				</div>
				
			</div>
		</div>
		
		<div class="col-sm-2 top-buffer">
			<div class="col-sm-12">
			
				<div class="row comment-avtor-gray">
					<p class="text-center">Вася</p>
				</div>
				<div class="row comment-email-gray">
					<p class="text-center">vasya@mail.ru</p>
				</div>
				<div class="row comment-text-gray">
					<p class="text-center">Сообщение от Василия Пупкина.</p>
				</div>
				
			</div>
		</div>
	
	</div>
	
	<div class="row">
	
		<div class="col-sm-2 col-md-offset-3 top-buffer">
			<div class="col-sm-12">
			
				<div class="row comment-avtor-green">
					<p class="text-center">Маруся</p>
				</div>
				<div class="row comment-email-green">
					<p class="text-center">marusia@mail.ru</p>
				</div>
				<div class="row comment-text-green">
					<p class="text-center">Всем привет, я Маруся</p>
				</div>
				
			</div>
		</div>
		
		<div class="col-sm-2 top-buffer">
			<div class="col-sm-12">
			
				<div class="row comment-avtor-gray">
					<p class="text-center">Вася</p>
				</div>
				<div class="row comment-email-gray">
					<p class="text-center">vasya@mail.ru</p>
				</div>
				<div class="row comment-text-gray">
					<p class="text-center">Сообщение от Василия Пупкина.</p>
				</div>
				
			</div>
		</div>
	
	</div>

</div>

<div class="container background-black top-buffer">

	<div class="row">

		<div class="col-sm-2 col-md-offset-3">
			<p><img src="images/logo_small.png" alt="Honey Hunters logo"></p>
		</div>
		
		<div class="col-sm-2 col-md-offset-2">
			<img src="images/vk_icon.png" alt="Vkontake icon">
			<img src="images/facebook_icon.png" alt="Facebook icon">
		</div>
		
	</div>

</div>

</body>
</html>