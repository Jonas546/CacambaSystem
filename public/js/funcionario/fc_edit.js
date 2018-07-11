function fc_modal_edit(cod){

	$('#error').hide();
	$('#warning').hide();
	$('#success').hide();
	
	$.ajax({
		url: '/fc_get/'+cod,
		type: 'get',
		dataType: 'json',
		success:function(rs){
			$('#cod').val(cod);
			$('#nome').val(rs.nome);
			$('#rg').val(rs.rg);
			$('#cpf').val(rs.cpf);
			$('#tel').val(rs.tel);
			$('#email').val(rs.email);
			$('#end').val(rs.end);
			$('#cep').val(rs.cep);
			$('#cidade').val(rs.cidade);
			$('#uf').val(rs.uf);
			$('#adm').val(dataPtBr(rs.admissao));
			$('#salario').val(rs.salario);
			$('#nasc').val(dataPtBr(rs.nasc));
			$('#cargo').val(rs.cargo);
		}
	});

}

function dataPtBr(data){

var aux = data.split('-');

data = aux[2]+'/'+aux[1]+'/'+aux[0];

return data;

}
