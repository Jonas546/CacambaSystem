$(document).ready(function(){

	var numb = $('#numb').val();
	$('#cbform').submit(function(){

		var numb = $('#numb').val();
		var status = "Livre";

		$('#message').empty();

		if(numb == ""){

			$('#message').html('<div id="error" class="alert alert-danger">Campo Obrigatório!</div>');
			return false;
		} else {

			$.ajax({
				url: "/store",
				type: 'POST',
    			dataType: "json",
				data: $('#cbform').serialize(),
				error:function(){
					$('#message').empty();
					$('#message').html('<div id="error" class="alert alert-danger">Problemas no Servidor. Tente Mais Tarde.</div>');
				},
				beforeSend:function(){
					$('#message').empty();
					$('#message').html('<div id="warning" class="alert alert-warning">Processando...</div>');
				},
				success:function(rs){
					$('#message').empty();
					$('#message').html('<div id="success" class="alert alert-success">Campo Obrigatório!</div>');

					if (rs.message == 'error'){

						$('#message').html('<div id="error" class="alert alert-danger">Caçamba já Existente!</div>');
					} 

					if (rs.message == 'ok'){

						$('#message').html('<div id="success" class="alert alert-success">Caçamba Registrada com Sucesso!</div>');

					}

				}	
			});
			
			return false;
		}
	});
});
