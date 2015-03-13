$(function(){
	$('#bt_ajax').click(function(){
		$.ajax({
			url: 'file.txt',
			type: 'GET',
			dataType: 'text',
			success: function(data){
				$('#resultadoAjax').append(data);
			}
		});
	});
});