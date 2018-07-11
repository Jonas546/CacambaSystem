function fc_modal_mais(cod){
	
	$.ajax({
		type: 'get',
		url: '/fc_get/'+cod,
		dataType: 'json',
		cache: false,
		success: function(rs){
			$('#fcm_nome').val(rs.nome);
			$('#fcm_cargo').val(rs.cargo);
			$('#fcm_rg').val(rs.rg);
			$('#fcm_cpf').val(rs.cpf);
			$('#fcm_email').val(rs.email);
			$('#fcm_tel').val(rs.tel);
			$('#fcm_nasc').val(dataPtBr(rs.nasc));
			$('#fcm_end').val(rs.end);
			$('#fcm_cep').val(rs.cep);
			$('#fcm_cidade').val(rs.cidade + ' - ' + rs.uf);
			$('#fcm_adm').val(dataPtBr(rs.admissao));

			if(rs.admissao == rs.demissao){
				$('#dt_dem').hide();
			} else {
				$('#fcm_dem').val(dataPtBr(rs.demissao));
			}

			$('#fcm_salario').val('R$ '+rs.salario);
			$('#fcm_status').val(rs.status);
		}
	});

}

function dataPtBr(data){

var aux = data.split('-');

data = aux[2]+'/'+aux[1]+'/'+aux[0];

return data;

}
