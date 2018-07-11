<table class="table table-striped">
	<tr>
		<td>Nº da Caçamba</td>
		<td>Status</td>
		<td colspan="2">Opção</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->numero}}</td>
		<td>
			@if ($t->status == 'Livre')
			<div style="color:green">{{$t->status}}</div>
			@endif
			@if ($t->status == 'Alugada')
			<div style="color:red">{{$t->status}}</div>
			@endif
		</td>
		<td><button class="btn btn-primary mb-2" id="ed" data-toggle="modal" data-target="#modal_edit" onclick="cbmodal(<?php echo $t->numero; ?>, <?php echo $t->id; ?>);">Editar</button>&nbsp;&nbsp;
		<button class="btn btn-danger mb-2" id="ex" data-toggle="modal" data-target="#modal_del" onclick="cbmodal1(<?php echo $t->id; ?>);">Excluir</button></td>

	</tr>

	@endforeach
</table>
{{ $table->render() }}