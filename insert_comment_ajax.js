$(document).ready(function(){
	
	// При отправки формы
	$("#add_comment").submit(function(e) {
		
		e.preventDefault();
		
		// Приcваиваем переменным значения полей формы
		var name = $("#name").val();
        var email = $("#email").val();
		var comment = $("#comment").val();
		
		// Отправляем данные формы методом ajax
		$.ajax({
			data: "name=" + name+ "&email=" + email+ "&comment=" + comment,
			type: "POST",
			url: "insert_comment.php",
			success: function(data){
				// Очищаем поля формы
				$("#add_comment")[0].reset();
			}
		});
		
		
		
	});
	
});