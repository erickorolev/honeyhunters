$(document).ready(function(){
	
	// При отправке формы
	$("#add_comment").submit(function(e) {
		
		e.preventDefault();
			
		var response = '';
	
		// Получаем данные ajax-запросом из файла get_comments.php
		$.ajax({
			type: "get",
			dataType: "html", 
			url: "get_comments.php",
			success: function(response){
				// Размещаем данные в контейнер
				$("#ajax_response").html(response); 
			}
		});
		
	});
	
});