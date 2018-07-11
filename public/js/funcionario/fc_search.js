$(document).ready(function(){

	$('#message2').empty();

	$('#cb12').click(function(){

		var val = $('#val').val();

		if (val == ""){
			
			return false;
		
		} else {

			$.ajax({
				url: '/fc_getname/'+val,
				cache: false,
				type: 'get',
				dataType: 'json',
				error:function(){

					$('#message2').empty();
					$('#message2').html('<div id="error2" class="alert alert-danger">Problemas no Servidor. Tente Novamente Mais Tarde.</div>');
					$('#cb_table').empty();
					

				},
				beforeSend:function(){

					$('#message2').empty();
					$('#message2').html('<div id="warning2" class="alert alert-warning">Buscando...</div>');
					$('#cb_table').empty();


				},
				success:function(rs){

					if(rs.message == 'error'){

						$('#cb_table').empty();
						$('#message2').empty();
						$('#message2').html('<div class="alert alert-primary" id="primary">Funcionário(a) não Encontrado(a).</div>');
						

					} else {

						$('#message2').empty();
						//alert(ids + numb + st);

						$('#cb_table').empty();


						var string = "<table class='table table-striped'>";
						string += "<tr>";
						string += "<td>Nome</td>";
						string += "<td>Cargo</td>";
						string += "<td>Cpf</td>";
						string += "<td>Status</td>";
						string += "<td>Opção</td>";
						string += "</tr>";
						string += "<tr>";
						string += "<td>"+rs.nome+"</td>";
						string += "<td>"+rs.cargo+"</td>";
						string += "<td>"+rs.cpf+"</td>";
						string += "<td>"+rs.status+"</td>";
						string += "<td><button class='btn btn-info mb-2' id='em' data-toggle='modal' data-target='#modal_mais' onclick='fc_modal_mais("+rs.ids+");'>+ Mais</button>";
						string += "&nbsp;&nbsp;<button class='btn btn-primary mb-2' id='ed' data-toggle='modal' data-target='#modal_edit' onclick='fc_modal_edit("+rs.ids+");'>Editar</button>";
						string += "&nbsp;&nbsp;<button class='btn btn-danger mb-2' data-toggle='modal' data-target='#modal_del' id='ex' onclick='get("+rs.ids+");'>Desligar</button></td>";
						string += "</tr>";
						string += "</table>";

						$('#cb_table').html(string);

					}

				}
			});	

			return false;	

		}

	});
});