$(document).ready(function(){

	$('#message').empty();

	$('#gtform').submit(function(){

		$('#message').empty();

		var nome = $('#nome').val();
		var tipo = $('#tipo').val();
		var qtde = $('#qtde').val();
		var valor =  $('#valor').val();
		var data_dia =  $('#data_dia').val();
		var func =  $('#func').val();

		var error = '';

		if(nome == ''){
			error = "Campo Descrição Obrigatório! </br>";
		}

		if(tipo == 'Escolha...'){

			if(error == ''){
				error = 'Escolha um Tipo! </br>';
			} else {
				error += 'Escolha um Tipo! </br>';
			}

		}

		if(qtde == ''){

			if(error == ''){
				error = 'Campo Quantidade Obrigatório! </br>';
			} else {
				error += 'Campo Quantidade Obrigatório! </br>';
			}

		}

		if(valor == ''){

			if(error == ''){
				error = 'Campo Valor Obrigatório! </br>';
			} else {
				error += 'Campo Valor Obrigatório! </br>';
			}

		}

		if(data_dia == ''){

			if(error == ''){
				error = 'Campo Data Obrigatório! </br>';
			} else {
				error += 'Campo Data Obrigatório! </br>';
			}

		}

		if(func == 'Escolha...'){

			if(error == ''){
				error = 'Escolha um Funcionário! </br>';
			} else {
				error += 'Escolha um Funcionário! </br>';
			}

		}

		if((nome == '') || (tipo == 'Escolha...') || (qtde == '') || (valor == '') || (data_dia == '') || ('func' == 'Escolha...')){

			$('#message').html("<div id='error' class='alert alert-danger'>"+error+"</div>");
			return false;

		}

		if((nome != '') && (tipo != 'Escolha...') && (qtde != '') && (valor != '') && (data_dia != '') && ('func' != 'Escolha...')){

			$.ajax({
				dataType: 'json',
				data: $('#gtform').serialize(),
				type: 'post',
				cache: false,
				url: '/gt_store',
				error:function(){
					$('#message').empty();
					$('#message').html("<div id='error' class='alert alert-danger'>Problemas no Servidor. Tente Mais Tarde.</div>");
				},
				beforeSend:function(){
					$('#message').empty();
					$('#message').html("<div id='warning' class='alert alert-warning'>Processando...</div>");
				},
				success:function(rs){

					if(rs.message == 'ok'){
						$('#message').empty();
						clear();
						$('#message').html('<div id="success" class="alert alert-success">Despesa Registrada com Sucesso!</div>');
					}

				}
			});

			return false;

		}

	});

});

function clear(){

	$('#nome').val('');
	$('#qtde').val('');
	$('#valor').val('');
	$('#data_dia').val('');

}