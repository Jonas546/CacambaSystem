$(document).ready(function(){
	
	$('#message1').empty();

	$('#delform').submit(function(){

		var val = $('#id1').val();

		$.ajax({
			url: '/delete/'+val,
			type: 'get',
			cache: false,
    		dataType: 'json',
			error:function(){

				$('#message1').empty();
				$('#message1').html("<div id='error' class='alert alert-danger'>Problemas no Servidor. Tente Mais Tarde.</div>");
			},
			beforeSend:function(){
				$('#message1').empty();
				$('#message1').html("<div id='warning' class='alert alert-warning'>Processando.</div>");
			},
			success:function(rs){

				if (rs.message == 'ok'){

				$('#message1').empty();
				$('#message1').html("<div id='success' class='alert alert-success'>Excluído com Sucesso!</div>");
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