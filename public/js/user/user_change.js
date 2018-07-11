$(document).ready(function(){

	$('#message').empty();

	$('#usupform').submit(function(){

		$('#message').empty();

		var senha = $('#senha').val();
		var senha1 = $('#senha1').val();
		var error = '';

		if(senha == ''){
			if(error == ''){
				error = "Campo Senha Obrigatório </br>";
			} else {
				error += "Campo Senha Obrigatório </br>";
			}
		}

		if(senha1 == ''){
			if(error == ''){
				error = "Campo Confere Senha Obrigatório </br>";
			} else {
				error += "Campo Confere Senha Obrigatório </br>";
			}
		}

		if((senha == '') || (senha1 == '')){

			$('#message').html("<div id='error' class='alert alert-danger'>"+error+"</div>");
			return false;

		}

		if(senha != senha1){

			$('#message').html("<div id='error' class='alert alert-danger'>Senhas não Conferem.</div>");
			return false;

		}

		if((senha != '') && (senha1 != '') && (senha == senha1)){

			$.ajax({
				dataType: 'json',
				type: 'post',
				url: '/user_change',
				cache: false,
				data: $('#usupform').serialize(),
				error:function(){
					$('#message').html("<div id='error' class='alert alert-danger'>Problemas no Servidor. Tente mais Tarde.</div>");
				},
				beforeSend:function(){
					$('#message').html("<div id='warning' class='alert alert-warning'>Procesando...</div>");
				},
				success:function(rs){

					$('#message').empty();

					if(rs.message == 'ok'){
						$('#message').html("<div id='success' class='alert alert-success'>Senha Mudada com Sucesso!</div>");
					}

				}
			});

			return false;

		}

	});

});