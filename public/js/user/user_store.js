$(document).ready(function(){

	$('#message').empty();

	$('#usform').submit(function(){

		$('#message').empty();

		var user = $('#user').val();
		var email =$('#email').val();
		var pass = $('#senha').val();
		var error = '';

		if(user == ''){
			if(error == ''){
				error = "Campo Usuário Obrigatório </br>";
			} else {
				error += "Campo Usuário Obrigatório </br>";
			}
		}

		if(email == ''){
			if(error == ''){
				error = "Campo E-mail Obrigatório </br>";
			} else {
				error += "Campo E-mail Obrigatório </br>"
			}
		}

		if(pass == ''){
			if(error == ''){
				error = "Campo Senha Obrigatório </br>";
			} else {
				error += "Campo Senha Obrigatório </br>";
			}
		}

		if((user == '') || (pass == '') || (email == '')){

			$('#message').html("<div id='error' class='alert alert-danger'>"+error+"</div>");
			return false;

		}

		if((user != '') && (pass != '') && (email != '')){

			$.ajax({
				dataType: 'json',
				type: 'post',
				url: '/user_store',
				cache: false,
				data: $('#usform').serialize(),
				error:function(){
					$('#message').html("<div id='error' class='alert alert-danger'>Problemas no Servidor. Tente mais Tarde.</div>");
				},
				beforeSend:function(){
					$('#message').html("<div id='warning' class='alert alert-warning'>Procesando...</div>");
				},
				success:function(rs){

					$('#message').empty();

					if(rs.message == 'ok'){
						$('#message').html("<div id='success' class='alert alert-success'>Usuário Registrado com Sucesso!</div>");
					}

				}
			});

			return false;

		}

	});

});