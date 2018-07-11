<table class="table table-striped">
	<tr>
		<td>Nº do Pedido</td>
		<td>Cliente</td>
		<td>Endereço</td>
		<td colspan="2">Opção</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->id}}</td>
		<td>{{$t->cliente}}</td>
		<td>{{$t->endereco}}, {{$t->cidade}} - {{$t->uf}}</td>
		<td><button class="btn btn-info mb-2" id="ed" data-toggle="modal" data-target="#modal_mais" onclick="lc_modal_mais(<?php echo $t->id; ?>);">+ Mais</button>&nbsp;
		<button class="btn btn-danger mb-2" id="ed" data-toggle="modal" data-target="#modal_del" onclick="lc_modal_del(<?php echo $t->id; ?>);">Excluir</button></td>

	</tr>

	@endforeach
</table>
{{ $table->render() }}