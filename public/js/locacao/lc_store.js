$(document).ready(function(){

	$('#nota').hide();
	$('#lcform').submit(function(){

		$('#message').empty();

		var cliente = $('#cliente').val();
		var end = $('#end').val();
		var cep = $('#cep').val();
		var cidade = $('#cidade').val();
		var uf = $('#uf').val();
		var unit = $('#unit').val();
		var dia = $('#dia').val();
		var saida = $('#saida').val();
		var volta = $('#volta').val();
		var cb = $('#cb').val();
		var fci = $('#fci').val();
		var fcr = $('#fcr').val();
		var total = unit * dia;
		var status = "Aberto";
		var array = {'_token': $('input[name=_token]').val(),
		'cliente': cliente, 'end': end, 'cep': cep, 'cidade': cidade,
		'uf': uf, 'unit': unit, 'dia': dia, 'saida': saida, 'volta': volta,
		'cb': cb, 'fci': fci, 'fcr': fcr, 'total': total, 'status': status
		};

		var error = '';

		if (cliente == ''){
			error = 'Campo Cliente Obrigatório! </br>';
		}

		if (end == ''){

			if(error == ''){
				error = 'Campo Endereço Obrigatório! </br>';
			} else {
				error += 'Campo Endereço Obrigatório! </br>';
			}

		}

		if (cep == ''){

			if(error == ''){
				error = 'Campo Cep Obrigatório! </br>';
			} else {
				error += 'Campo Cep Obrigatório! </br>';
			}

		}

		if (cidade == ''){

			if(error == ''){
				error = 'Campo Cidade Obrigatório! </br>';
			} else {
				error += 'Campo Cidade Obrigatório! </br>';
			}

		}

		if (uf == ''){

			if(error == ''){
				error = 'Campo Uf Obrigatório! </br>';
			} else {
				error += 'Campo Uf Obrigatório! </br>';
			}

		}

		if (unit == ''){

			if(error == ''){
				error = 'Campo Valor por Dia Obrigatório! </br>';
			} else {
				error += 'Campo Valor por Dia Obrigatório! </br>';
			}

		}		

		if (dia == ''){

			if(error == ''){
				error = 'Campo Dias Obrigatório! </br>';
			} else {
				error += 'Campo Dias Obrigatório! </br>';
			}

		}

		if (saida == ''){

			if(error == ''){
				error = 'Campo Data de Saída Obrigatório! </br>';
			} else {
				error += 'Campo Data de Saída Obrigatório! </br>';
			}

		}

		if (volta == ''){

			if(error == ''){
				error = 'Campo Data de Retorno Obrigatório! </br>';
			} else {
				error += 'Campo Data de Retorno Obrigatório! </br>';
			}

		}

		if (cb == 'Escolha...'){

			if(error == ''){
				error = 'Escolha uma Caçamba! </br>';
			} else {
				error += 'Escolha uma Caçamba! </br>';
			}

		}

		if (fci == 'Escolha...'){

			if(error == ''){
				error = 'Escolha um Funcionário! </br>';
			} else {
				error += 'Escolha um Funcionário! </br>';
			}

		}

		if (fcr == 'Escolha...'){

			if(error == ''){
				error = 'Escolha um Funcionário! </br>';
			} else {
				error += 'Escolha um Funcionário! </br>';
			}

		}	

		if ((cliente == '') || (end == '') || (cep == '') || (cidade == '') || (uf == '') || (unit == '') || (dia == '') || (saida == '') || (volta == '') || (cb == 'Escolha...') || (fci == 'Escolha...') || (fcr == 'Escolha')){
			$('#message').html("<div id='error' class='alert alert-danger'>"+error+"</div>");
			return false;
		}

		if ((cliente != '') && (end != '') && (cep != '') && (cidade != '') && (uf != '') && (unit != '') && (dia != '') && (saida != '') && (volta != '') && (cb != 'Escolha...') && (fci != 'Escolha...') && (fcr != 'Escolha')){

		$.ajax({
			dataType: 'json',
			data: array,
			type: 'post',
			url: '/lc_store',
			cache: false,
			error:function(){
				$('#message').empty();
			    $('#message').html('<div id="error" class="alert alert-danger">Problemas no Servidor. Tente Mais Tarde.</div>');
			},
			beforeSend:function(){
				$('#message').empty();
				$('#message').html('<div id="warning" class="alert alert-warning">Processando...</div>');
			},
			success:function(rs){

				if (rs.message == 'ok'){

					$('#nota').show();
					$('#aux').val(cliente);
					$('#message').html('<div id="success" class="alert alert-success">Locação Feita com Sucesso!</div>');
					$('#nota').html("<a target='_blank' href='/nota/"+rs.cod+"' class='btn btn-primary mb-2' id='btnr'>Imprimir Nota</a>");
				}

			}
		});

		return false;

	}

	});

});

function getCliente(){
	var aux = $('#aux').val();
	return aux;
}