$(document).ready(function(){
	
	// При клике на кнопку "Записать".
	$("#write").click(function() {
		
		// Приcваиваем переменным значения полей формы
		var name = $("#name").val();
        var email = $("#email").val();
		var comment = $("#comment").val();
		
		// Отправляем данные формы методом ajax
		$.ajax({
			data: "name=" + name+ "&email=" + email+ "&comment=" + comment,
			type: "post",
			url: "insert_comment.php",
			success: function(data){
				alert("Data Save: " + data);
			}
		});
		
	});
	
});