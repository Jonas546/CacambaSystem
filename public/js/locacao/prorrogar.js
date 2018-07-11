function lc_modal_edit(cod){

	$('#message1').empty();
	
	$.ajax({
		type: 'get',
		url: '/lc_get/'+cod,
		dataType: 'json',
		cache: false,
		success: function(rs){
			$('#eid').val(rs.id);
			$('#esaida').val(dataPtBr(rs.inicio));
			$('#evolta').val(dataPtBr(rs.fim));
			$('#eunit').val(rs.valor_unit);

		}
	});

}

function dataPtBr(data){

var aux = data.split('-');

data = aux[2]+'/'+aux[1]+'/'+aux[0];

return data;

}

function decimal(val){

	var aux = val.split('.');

	val = aux[0]+','+aux[1];

	return val;

}