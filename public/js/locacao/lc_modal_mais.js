function lc_modal_mais(cod){
	
	$.ajax({
		type: 'get',
		url: '/lc_get/'+cod,
		dataType: 'json',
		cache: false,
		success: function(rs){
			$('#lcm_cliente').val(rs.cliente);
			$('#lcm_end').val(rs.endereco + ', ' + rs.cidade + ' - ' + rs.uf);
			$('#lcm_cep').val(rs.cep);
			$('#lcm_saida').val(dataPtBr(rs.inicio));
			$('#lcm_volta').val(dataPtBr(rs.fim));
			$('#lcm_unit').val('R$ ' +(rs.valor_unit).toFixed(2));
			$('#lcm_dia').val(rs.dias);
			$('#lcm_total').val('R$ ' + (rs.total).toFixed(2));
			$('#lcm_m_ida').val(rs.m_ida);
			$('#lcm_m_volta').val(rs.m_volta);
			$('#lcm_cacamba').val('Nº ' +rs.cacamba);

		}
	});

}

function dataPtBr(data){

var aux = data.split('-');

data = aux[2]+'/'+aux[1]+'/'+aux[0];

return data;

}
