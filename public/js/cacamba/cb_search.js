$(document).ready(function(){

	$('#message2').empty();

	$('#cb12').click(function(){

		var val = $('#val').val();

		if (val == ""){
			
			return false;
		
		} else {

			$.ajax({
				url: '/show/'+val,
				cache: false,
				type: 'get',
				dataType: 'json',
				error:function(){

					$('#cb_table').empty();
					$('#message2').empty();
					$('#message2').html('<div id="error2" class="alert alert-danger">Problemas no Servidor. Tente Mais Tarde.</div>');

				},
				beforeSend:function(){

					$('#cb_table').empty();
					$('#message2').empty();
					$('#message2').html('<div id="warning2" class="alert alert-warning">Buscando...</div>')

				},
				success:function(rs){

					if(rs.message == 'error'){

						$('#cb_table').empty();
						$('#message2').empty();
						$('#message2').html('<div id="primary" class="alert alert-primary">Caçamba Não Encontrada.</div>');
						

					} else {

						$('#message2').empty();

						var ids = rs.id;
						var numb = rs.numero;
						var st = rs.status;

						//alert(ids + numb + st);

						$('#cb_table').empty();


						var string = "<table class='table table-striped'>";
						string += "<tr>";
						string += "<td>Nº da Caçamba</td>";
						string += "<td>Status</td>";
						string += "<td colspan='2'>Opção</td>";
						string += "</tr>";
						string += "<tr>";
						string += "<td>"+numb+"</td>";
						string += "<td>"+st+"</td>";
						string += "<td colspan='2'><button class='btn btn-primary mb-2' id='ed' data-toggle='modal' data-target='#modal_edit' onclick='cbmodal("+numb+", "+ids+");'>Editar</button>";
						string += "&nbsp;&nbsp;<button class='btn btn-danger mb-2' id='ex' data-toggle='modal' data-target='#modal_del' onclick='cbmodal1("+ids+");'>Excluir</button></td>";
						string += "</table>";

						$('#cb_table').html(string);

					}

				}
			});	

			return false;	

		}

	});
});