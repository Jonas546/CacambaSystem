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
		<a target='_blank' href='/notas/<?php echo $t->id; ?>' class='btn btn-primary mb-2' id='btnr'>Gerar Nota</a>&nbsp;
		<button class="btn btn-primary mb-2" id="ed" data-toggle="modal" data-target="#modal_edit" onclick="lc_modal_edit(<?php echo $t->id; ?>);">Prorrogar</button>&nbsp;
		<button class="btn btn-danger mb-2" id="ed" data-toggle="modal" data-target="#modal_fin" onclick="lc_modal_fin(<?php echo $t->id; ?>);">Fechar</button>

	</tr>

	@endforeach
</table>
{{ $table->render() }}