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


						var string = "<table class='table table-striped' id='fc_data'>";
						string += "<tr>";
						string += "<td>Nome</td>";
						string += "<td>Cargo</td>";
						string += "<td class='fc_cel'>Cpf</td>";
						string += "<td class='fc_cel'>Status</td>";
						string += "<td>Opção</td>";
						string += "</tr>";
						string += "<tr>";
						string += "<td>"+rs.nome+"</td>";
						string += "<td>"+rs.cargo+"</td>";
						string += "<td class='fc_cel'>"+rs.cpf+"</td>";
						string += "<td class='fc_cel'>"+rs.status+"</td>";
						string += "<td>";
						string += "<div id='fc_normal'>";
						string += "<button class='btn btn-info mb-2' id='em' data-toggle='modal' data-target='#modal_mais' onclick='fc_modal_mais("+rs.ids+");'>+ Mais</button>&nbsp";
						string += "<button class='btn btn-primary mb-2' id='ed' data-toggle='modal' data-target='#modal_edit' onclick='fc_modal_edit("+rs.ids+");'>Editar</button>&nbsp";
						string += "<button class='btn btn-danger mb-2' data-toggle='modal' data-target='#modal_del' id='ex' onclick='get("+rs.ids+");'>Desligar</button>";
						string += "</div>";
						string += "<div id='fc_small'>";
						string += "<div class='dropdown'>";
						string += "<button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Opção";
						string += "<span class='caret'></span></button>";
						string += "<ul class='dropdown-menu'>";
						string += "<li><a href='#' data-toggle='modal' data-target='#modal_mais' onclick='fc_modal_mais("+rs.ids+");'>&nbsp;&nbsp;+ Mais</a></li>";
						string += "<li><a href='#' data-toggle='modal' data-target='#modal_edit' onclick='fc_modal_edit("+rs.ids+");'>&nbsp;&nbsp;Editar</a></li>";
						string += "<li><a href='#' data-toggle='modal' data-target='#modal_del' id='ex' onclick='get("+rs.ids+");'>&nbsp;&nbsp;Desligar</a></li>";
						string += "</ul>";
						string += "</div>";
						string += "</div>";
						string += "</td>";
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