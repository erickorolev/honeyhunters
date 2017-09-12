<!DOCTYPE HTML>  
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="insert_comment_ajax.js"></script>
<script src="get_comments_ajax.js"></script>
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

	<form name="form" action="#">

		<div class="row">
			
			<div class="col-sm-3 col-md-offset-3">

				<div class="form-group required">
					<label for="name" class='control-label'>Имя</label>
					<input type="text" class="form-control" id="name" required="required">
				</div>

				<div class="form-group required">
					<label for="email" class='control-label'>E-mail</label>
					<input type="email" class="form-control" id="email" required="required">
				</div>
		
			</div>
		
			<div class="form-group required">
				<div class="col-sm-3">
					<label for="comment" class='control-label'>Комментарий</label>
					<textarea class="form-control" rows="5" id="comment" required="required"></textarea>
				</div>
			</div>
		
		</div>

		<div class="row top-buffer bottom-buffer">
			<div class="col-md-1 col-md-offset-8">
				<button type="submit" id="write" class="btn btn-default button">Записать</button>
			</div>
		</div>

	</form>

</div>

<div class="container top-buffer">

	<div class="row">
			<div class="col-md-3 col-md-offset-5">
				<h3 class="text-center">Выводим комментарии</h3>
			</div>
	</div>
	
	<div class="row">
			<div id="ajax_response" class="col-md-3 col-md-offset-5">
				
			</div>
	</div>
		
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