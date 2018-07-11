$(document).ready(function(){

	$("#rg").mask('00.000.000-0', {reverse: true});
	$("#cpf").mask('000.000.000-00', {reverse: true});
	$("#cep").mask('00000-000', {reverse: true});
	$("#tel").mask('00000000000', {reverse: true});
	$("#nasc").mask('00/00/0000', {reverse: true});
	$("#adm").mask('00/00/0000', {reverse: true});
	$("#dem").mask('00/00/0000', {reverse: true});
	$("#data_dia").mask('00/00/0000', {reverse: true});
	$("#salario").mask('9990000,00', {reverse: true});
	$("#unit").mask('9999990.00', {reverse: true});
	$("#valor").mask('9999990.00', {reverse: true});
	$("#dia").mask('9999990', {reverse: true});
	$("#qtde").mask('9999990', {reverse: true});
	$("#saida").mask('00/00/0000', {reverse: true});
	$("#volta").mask('00/00/0000', {reverse: true});

});