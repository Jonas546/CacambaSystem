$(document).ready(function(){

	$('#message2').empty();

	$('#cb12').click(function(){

		var val = $('#val').val();

		if (val == ""){
			
			return false;
		
		} else {

			$.ajax({
				url: '/lc_gets/'+val,
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


						var string = "<table class='table table-striped'>";
							string += "<tr>";
							string += "<td>Nº do Pedido</td>";
							string += "<td>Cliente</td>";
							string += "<td>Endereço</td>";
							string += "<td colspan='2'>Opção</td>";
							string += "</tr>";
							string += "<tr>";
							string += "<td>"+rs.id+"</td>";
							string += "<td>"+rs.cliente+"</td>";
							string += "<td>"+rs.endereco+", "+rs.cidade+" - "+rs.uf+"</td>";
							string += "<td><button class='btn btn-info mb-2' id='ed' data-toggle='modal' data-target='#modal_mais' onclick='lc_modal_mais("+rs.id+");'>+ Mais</button>&nbsp;";
							string += "<button class='btn btn-danger mb-2' id='ed' data-toggle='modal' data-target='#modal_del' onclick='lc_modal_del("+rs.id+");'>Excluir</button>";
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