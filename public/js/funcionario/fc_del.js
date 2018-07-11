$(document).ready(function(){

	divClear();

	$('#fcd_form').submit(function(){

		divClear();

		var id = $('#cod1').val();
		var dem = $('#dem').val();

		var teste = {'id': id, 'dem': dem,
		'_token': $('input[name=_token]').val()};

		if(dem == ""){

			error = "Campo Data de Demissão Obrigatório!";

		}

		if (dem == ""){

			$('#warning1').hide();
			$('#success1').hide();
			$('#error1').show();
			$('#error1').html(error);

			return false;

		} 

		if (dem != ""){

			$.ajax({
				url: "/fc_del",
				type: 'POST',
				cache: false,
    			dataType: "json",
				data: teste,
				error:function(){
					$('#warning1').hide();
					$('#error1').show();
					$('#error1').html('Problemas no Servidor. Tente Novamente Mais Tarde.');
				},
				beforeSend:function(){
					$('#error1').hide();
					$('#warning1').show();
					$('#warning1').html('Processando...');
				},
				success:function(rs){
					
					divClear();

					if (rs.message == 'ok'){

					$('#error1').hide();
					$('#success1').show();
					$('#success1').html("Funcionário(a) Desligado(a) com Sucesso!");
					window.location.reload();
					}
					//console.log(rs);
				}	
			});

			return false;
		}
	});
});

function divClear(){
	$('#error1').hide();
	$('#warning1').hide();
	$('#success1').hide();
}