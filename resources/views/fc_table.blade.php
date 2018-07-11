<table class="table table-striped">
	<tr>
		<td>Nome</td>
		<td>Cargo</td>
		<td>Cpf</td>
		<td>Status</td>
		<td colspan="2">Opção</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->nome}}</td>
		<td>{{$t->cargo}}</td>
		<td>{{$t->cpf}}</td>
		<td>{{$t->status}}</td>
		<td>
		<button class="btn btn-info mb-2" id="em" data-toggle="modal" data-target="#modal_mais" onclick="fc_modal_mais(<?php echo $t->id; ?>);">+ Mais</button>&nbsp;
		<button class="btn btn-primary mb-2" id="ed" data-toggle="modal" data-target="#modal_edit" onclick="fc_modal_edit(<?php echo $t->id; ?>);">Editar</button>&nbsp;
		<button class="btn btn-danger mb-2" data-toggle="modal" data-target="#modal_del" id="ex" onclick="get(<?php echo $t->id; ?>);">Desligar</button></td>

	</tr>

	@endforeach
</table>
{{ $table->render() }}