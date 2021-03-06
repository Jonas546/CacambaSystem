$(document).ready(function(){

	divClear();

	$('#fce_form').submit(function(){

		divClear();

		$('#error').empty();

		var error = "";

		var id = $('#cod').val();
		var nome = $('#nome').val();
		var rg = $('#rg').val();
		var cpf = $('#cpf').val();
		var tel = $('#tel').val();
		var email = $('#email').val();
		var end = $('#end').val();
		var nasc = $('#nasc').val();
		var cep = $('#cep').val();
		var cidade = $('#cidade').val();
		var uf = $('#uf').val();
		var adm = $('#adm').val();
		var salario = $('#salario').val();
		var cargo = $('#cargos').val();

		if(cargo == "Escolha..."){
			cargo = $('#cargo').val();
		}

		var teste = {'id': id, 'nome': nome, 'rg': rg, 'cpf': cpf, 'tel': tel,
		'email': email, 'end': end, 'nasc': nasc, 'cep': cep,
		'cidade': cidade, 'uf': uf, 'adm': adm, 'salario': salario,
		'cargo': cargo, '_token': $('input[name=_token]').val()};

		//alert($('input[name=_token]').val());

		if(nome == ""){

			error = "Campo Nome Obrigatório <br/>";

		} 

		if(rg == ""){

			if (error == ""){
				error = "Campo RG Obrigatório <br/>";
			} else {
				error += "Campo RG Obrigatório <br/>";
			}

		}

		if(cpf == ""){

			if (error == ""){
				error = "Campo CPF Obrigatório <br/>";
			} else {
				error += "Campo CPF Obrigatório <br/>";
			}

		}

		if(tel == ""){

			if (error == ""){
				error = "Campo Telefone Obrigatório <br/>";
			} else {
				error += "Campo Telefone Obrigatório <br/>";
			}

		}

		if(email == ""){

			if (error == ""){
				error = "Campo E-mail Obrigatório <br/>";
			} else {
				error += "Campo E-mail Obrigatório <br/>";
			}

		}

		if(end == ""){

			if (error == ""){
				error = "Campo Endereço Obrigatório <br/>";
			} else {
				error += "Campo Endereço Obrigatório <br/>";
			}

		}

		if(nasc == ""){

			if (error == ""){
				error = "Campo Data de Nascimento Obrigatório <br/>";
			} else {
				error += "Campo Data de Nascimento Obrigatório <br/>";
			}

		}

		if(cep == ""){

			if (error == ""){
				error = "Campo Cep Obrigatório <br/>";
			} else {
				error += "Campo Cep Obrigatório <br/>";
			}

		}

		if(cidade == ""){

			if (error == ""){
				error = "Campo Cidade Obrigatório <br/>";
			} else {
				error += "Campo Cidade Obrigatório <br/>";
			}

		}

		if(uf == ""){

			if (error == ""){
				error = "Campo UF Obrigatório <br/>";
			} else {
				error += "Campo UF Obrigatório <br/>";
			}

		}

		if(adm == ""){

			if (error == ""){
				error = "Campo Data de Admissão Obrigatório <br/>";
			} else {
				error += "Campo Data de Admissão Obrigatório <br/>";
			}

		}

		if(salario == ""){

			if (error == ""){
				error = "Campo Salário Obrigatório <br/>";
			} else {
				error += "Campo Salário Obrigatório <br/>";
			}

		}

		if ((nome == "") || (rg == "") || (cpf == "") || (tel == "") || (email == "") || (end == "") || (nasc == "") || (cep == "") || (cidade == "") || (uf == "") || (adm == "") || (salario == "")){

			$('#warning').hide();
			$('#success').hide();
			$('#error').show();
			$('#error').html(error);

			return false;

		} 

		if ((nome != "") && (rg != "") && (cpf != "") && (tel != "") && (email != "") && (end != "") && (nasc != "") && (cep != "") && (cidade != "") && (uf != "") && (adm != "") && (salario != "")){

			$.ajax({
				url: "/fc_update",
				type: 'POST',
				cache: false,
    			dataType: "json",
				data: teste,
				error:function(){
					$('#warning').hide();
					$('#error').show();
					$('#error').html('Problemas no Servidor. Tente Novamente Mais Tarde.');
				},
				beforeSend:function(){
					$('#error').hide();
					$('#warning').show();
					$('#warning').html('Processando...');
				},
				success:function(rs){
					
					divClear();

					if (rs.message == 'ok'){

					$('#error').hide();
					$('#warning').hide();
					$('#success').show();
					$('#success').html("Funcionário(a) Editado(a) com Sucesso!");
					window.location.reload();
					}
					//console.log(rs);
				}	
			});

			return false;
		}
	});
});

function divClear(){
	$('#error').hide();
	$('#warning').hide();
	$('#success').hide();
}