$(document).ready(function(){
	
	// При клике на кнопку "Записать".
	$("#write").click(function() {
		
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