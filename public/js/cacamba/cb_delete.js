$(document).ready(function(){

	$('#message1').empty();

	$('#delform').submit(function(){

		$('#message1').empty();

		var val = $('#id1').val();

		$.ajax({
			url: '/destroy/'+val,
			type: 'delete',
			cache: false,
    		dataType: 'json',
			data: $("#delform").serialize(),
			error:function(){

				$('#message1').empty();
				$('#message1').html('<div id="error" class="alert alert-danger">Problemas no Servidor. Tente Mais Tarde.</div>');
				setTimeout(function(){
					$('#mask1, .window1').hide();
					$(this).hide();
					$('.window1').hide();
				}, 3000);
			},
			beforeSend:function(){
				$('#message1').empty();
				$('#message1').html('<div id="warning" class="alert alert-warning">Processando...</div>');
			},
			success:function(rs){

				if (rs.message == 'ok'){

				$('#message1').empty();
				$('#message1').html('<div id="success" class="alert alert-success">Locação Feita com Sucesso!</div>');
				window.location.reload();
				setTimeout(function(){
					$('#mask1, .window1').hide();
					$(this).hide();
					$('.window1').hide();
				}, 3000);
				//console.log(rs);
				}

			}
				
		});

		return false;

	});
});