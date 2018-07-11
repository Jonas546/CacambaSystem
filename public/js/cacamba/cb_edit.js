$(document).ready(function(){

	$('#message').empty();

	var id = $('#cod').val();
	var numb = $('#numb').val();

	$('#cbform1').submit(function(){

		$('#message').empty();

		var id = $('#cod').val();
		var numb = $('#numb').val();
		var status = "Livre";

		if(numb == ""){

			$('#message').html('<div id="error" class="alert alert-danger">Campo Obrigatório!</div>');

			return false;
		} else {

			$.ajax({
				url: "/update",
				type: 'POST',
    			dataType: "json",
				data: $('#cbform1').serialize(),
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
					$('#success').hide();

					if (rs.message == 'error'){

						$('#message').empty();
						$('#message').html('<div id="error" class="alert alert-danger">Caçamba Existente!</div>');		

					} 

					if (rs.message == 'ok'){

					$('#message').empty();
					$('#message').html('<div id="success" class="alert alert-success">Caçamba Editada com Sucesso!</div>');
					window.location.reload();
					}
					//console.log(rs);
				}	
			});
			$('#numb').val("");
			return false;
		}
	});
});
