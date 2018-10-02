<table class="table table-striped" id="fc_data">
	<tr>
		<td>Nome</td>
		<td>Cargo</td>
		<td class="fc_cel">Cpf</td>
		<td class="fc_cel">Status</td>
		<td colspan="2">Opção</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->nome}}</td>
		<td>{{$t->cargo}}</td>
		<td class="fc_cel">{{$t->cpf}}</td>
		<td class="fc_cel">{{$t->status}}</td>
		<td>
		<div id="fc_normal">
			<button class="btn btn-info mb-2" id="em" data-toggle="modal" data-target="#modal_mais" onclick="fc_modal_mais(<?php echo $t->id; ?>);">+ Mais</button>&nbsp;
			<button class="btn btn-primary mb-2" id="ed" data-toggle="modal" data-target="#modal_edit" onclick="fc_modal_edit(<?php echo $t->id; ?>);">Editar</button>&nbsp;
			<button class="btn btn-danger mb-2" data-toggle="modal" data-target="#modal_del" id="ex" onclick="get(<?php echo $t->id; ?>);">Desligar</button>
		</div>
		<div id="fc_small">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Opção
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#" data-toggle="modal" data-target="#modal_mais" onclick="fc_modal_mais(<?php echo $t->id; ?>);">&nbsp;&nbsp;+ Mais</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal_edit" onclick="fc_modal_edit(<?php echo $t->id; ?>);">&nbsp;&nbsp;Editar</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal_del" id="ex" onclick="get(<?php echo $t->id; ?>);">&nbsp;&nbsp;Desligar</a></li>
				</ul>
			</div>
		</div>
		</td>
	</tr>

	@endforeach
</table>
{{ $table->render() }}