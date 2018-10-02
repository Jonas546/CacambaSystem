$(document).ready(function(){

	$('#message2').empty();

	$('#cb12').click(function(){

		var val = $('#val').val();

		if (val == ""){
			
			return false;
		
		} else {

			$.ajax({
				url: '/lc_get/'+val,
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
						$('#message2').html('<div class="alert alert-primary" id="primary">Pedido não Encontrado.</div>');
						

					} else {

						$('#message2').empty();
						//alert(ids + numb + st);

						$('#cb_table').empty();


						var string = "<table class='table table-striped' id='lc_data'>";
							string += "<tr>";
							string += "<td>Nº do Pedido</td>";
							string += "<td>Cliente</td>";
							string += "<td class='lc_cel'>Endereço</td>";
							string += "<td colspan='2'>Opção</td>";
							string += "</tr>";
							string += "<tr>";
							string += "<td>"+rs.id+"</td>";
							string += "<td>"+rs.cliente+"</td>";
							string += "<td class='lc_cel'>"+rs.endereco+", "+rs.cidade+" - "+rs.uf+"</td>";
							string += "<td>";
							string += "<div id='lc_normal'>";
							string += "<button class='btn btn-info mb-2' id='ed' data-toggle='modal' data-target='#modal_mais' onclick='lc_modal_mais("+rs.id+");'>+ Mais</button>&nbsp";
							string += "<a target='_blank' href='/notas/"+rs.id+"' class='btn btn-primary mb-2' id='btnr'>Gerar Nota</a>&nbsp";
							string += "<button class='btn btn-primary mb-2' id='ed' data-toggle='modal' data-target='#modal_edit' onclick='lc_modal_edit("+rs.id+");'>Prorrogar</button>&nbsp";
							string += "<button class='btn btn-danger mb-2' id='ed' data-toggle='modal' data-target='#modal_fin' onclick='lc_modal_fin("+rs.id+");'>Fechar</button>";
							string += "</div>";
							string += "<div id='lc_small'>";
							string += "<div class='dropdown'>";
							string += "<button class='btn btn-primary dropdown-toggle' type='button' data-toggle='dropdown'>Opção";
							string += "<span class='caret'></span></button>";
							string += "<ul class='dropdown-menu'>";
							string += "<li><a href='#' data-toggle='modal' data-target='#modal_mais' onclick='lc_modal_mais("+rs.id+");'>&nbsp;&nbsp;+ Mais</a></li>";
							string += "<li><a target='_blank' href='/notas/"+rs.id+" id='btnr'>&nbsp;&nbsp;Gerar Nota</a></li>";
							string += "<li><a href='#' data-toggle='modal' data-target='#modal_edit' onclick='lc_modal_edit("+rs.id+");'>&nbsp;&nbsp;Prorrogar</a></li>";
							string += "<li><a href='#' data-toggle='modal' data-target='#modal_fin' onclick='lc_modal_fin("+rs.id+");'>&nbsp;&nbsp;Fechar</a></li>";
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