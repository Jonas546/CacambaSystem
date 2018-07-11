$(document).ready(function(){

	$("#message3").empty();

	$('#lcfin_form').submit(function(){

		var id = $("#fid").val();
		var tipo = 'finalizar';
		var array = {
			'id': id,
			'type': tipo,
			'_token': $('input[name=_token]').val()
		};

		$.ajax({
			dataType: 'json',
			data: array,
			type: 'post',
			cache: false,
			url: '/lc_update_fin',
			error:function(){
					$('#message3').empty();
					$('#message3').html("<div id='error' class='alert alert-danger'>Problemas no Servidor. Tente Mais Tarde.</div>");
			},
			beforeSend:function(){
					$('#message3').empty();
					$('#message3').html("<div id='warning' class='alert alert-warning'>Processando...</div>");
			},
			success:function(rs){

				if(rs.message == 'ok'){

					$('#message3').empty();
					$('#message3').html("<div id='success' class='alert alert-success'>Finalização feita com Sucesso!</div>");
					window.location.reload();
					setTimeout(function(){
					$('#mask1, .window1').hide();
					$(this).hide();
					$('.window1').hide();
				}, 3000);

				}
						
			}

		});

		return false;

	});

});