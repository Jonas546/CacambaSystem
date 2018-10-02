<table class="table table-striped" id="lc_data">
	<tr>
		<td>Nº do Pedido</td>
		<td>Cliente</td>
		<td class="lc_cel">Endereço</td>
		<td colspan="2">Opção</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->id}}</td>
		<td>{{$t->cliente}}</td>
		<td class="lc_cel">{{$t->endereco}}, {{$t->cidade}} - {{$t->uf}}</td>
		<td>
			<div id="lc_normal">
				<button class="btn btn-info mb-2" id="ed" data-toggle="modal" data-target="#modal_mais" onclick="lc_modal_mais(<?php echo $t->id; ?>);">+ Mais</button>&nbsp;
				<a target='_blank' href='/notas/<?php echo $t->id; ?>' class='btn btn-primary mb-2' id='btnr'>Gerar Nota</a>&nbsp;
				<button class="btn btn-primary mb-2" id="ed" data-toggle="modal" data-target="#modal_edit" onclick="lc_modal_edit(<?php echo $t->id; ?>);">Prorrogar</button>&nbsp;
				<button class="btn btn-danger mb-2" id="ed" data-toggle="modal" data-target="#modal_fin" onclick="lc_modal_fin(<?php echo $t->id; ?>);">Fechar</button>
			</div>
			<div id="lc_small">
				<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Opção
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#" data-toggle="modal" data-target="#modal_mais" onclick="lc_modal_mais(<?php echo $t->id; ?>);">&nbsp;&nbsp;+ Mais</a></li>
					<li><a target='_blank' href='/notas/<?php echo $t->id; ?>' id='btnr'>&nbsp;&nbsp;Gerar Nota</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal_edit" onclick="lc_modal_edit(<?php echo $t->id; ?>);">&nbsp;&nbsp;Prorrogar</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal_fin" onclick="lc_modal_fin(<?php echo $t->id; ?>);">&nbsp;&nbsp;Fechar</a></li>
				</ul>
			</div>
			</div>
		</td>	
	</tr>

	@endforeach
</table>
{{ $table->render() }}