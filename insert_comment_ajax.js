$(document).ready(function(){
	
	// При клике на кнопку "Записать".
	$("#write").click(function() {
		
		// Присваиваемой переменной значения формы
		// var data = $("#form").serialize();
		
		var name = $("#name").val();
        var email = $("#email").val();
		var comment = $("#comment").val();
		
		// Отправляем данные формы ajax методом
		$.ajax({
			// data: data,
			data: "name=" + name+ "&email=" + email+ "&comment=" + comment,
			type: "post",
			url: "insert_comment.php",
			success: function(data){
				alert("Data Save: " + data);
			}
		});
		
	});
	
});