$(document).ready(function(){

	$('#dpform').submit(function(){

		$('#message').empty();
		$('#rel').empty();


		var ida = $('#data_inicio').val();
		var volta = $('#data_fim').val();
		var error = '';

		if(ida == ''){
			if(error == ''){
				error = 'Campo Data Inicial Obrigatório! </br>';
			} else {
				error += 'Campo Data Inicial Obrigatório! </br>';
			}
		}

		if(volta == ''){
			if(error == ''){
				error = 'Campo Final Inicial Obrigatório! </br>';
			} else {
				error += 'Campo Final Inicial Obrigatório! </br>';
			}
		}

		if((ida == '') || (volta == '')){

			$('#message').html("<div id='error' class='alert alert-danger'>"+error+"</div>");
			
			return false;

		}

		if((ida != '') &&  (volta != '')){

			$('#message').empty();
			$('#d_inicio').val(ida);
			$('#d_volta').val(volta);

		}

	});

});
