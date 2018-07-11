$(document).ready(function(){

	$('#message1').empty();

	$('#lc_edit').submit(function(){

		$('#message1').empty();

		var error = '';

		var unit = $('#eunit').val();
		var volta = $('#evolta').val();
		var dias = $('#edias').val();
		var id = $('#eid').val();
		var total = unit * dias;
		var array = {
			'type': 'prorrogar',
			'volta': volta,
			'dias': dias,
			'id': id,
			'total': total,
			'_token': $('input[name=_token]').val()
		};

		if (volta == ''){

			if(error == ''){
				error = 'Campo Retorno Obrigatório! </br>';
			} else {
				error += 'Campo Retorno Obrigatório! </br>';
			}

		}

		if (dias == ''){

			if(error == ''){
				error = 'Campo Dias Obrigatório! </br>';
			} else {
				error += 'Campo Dias Obrigatório! </br>';
			}

		}

		if((volta == '') || (dias == '')){

			$('#message1').html("<div id='error' class='alert alert-danger'>"+error+"</div>");
			return false;

		}

		if((volta != '') && (dias != '')){

			$.ajax({
				dataType: 'json',
				data: array,
				type: 'post',
				cache: false,
				url: '/lc_update',
				error:function(){
					$('#message1').empty();
					$('#message1').html("<div id='error' class='alert alert-danger'>Problemas no Servidor. Tente Mais Tarde.</div>");
				},
				beforeSend:function(){
					$('#message1').empty();
					$('#message1').html("<div id='warning' class='alert alert-warning'>Processando...</div>");
				},
				success:function(rs){

					if(rs.message == 'ok'){

						$('#message1').empty();
						$('#message1').html("<div id='success' class='alert alert-success'>Prorrogação feita com Sucesso!</div>");

					}
						
				}
			});

			return false;

		}

	});

});