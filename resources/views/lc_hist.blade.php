<table class="table table-striped" id="lch_data">
	<tr>
		<td>Nº do Pedido</td>
		<td>Cliente</td>
		<td class="lch_cel">Endereço</td>
		<td colspan="2">Opção</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->id}}</td>
		<td>{{$t->cliente}}</td>
		<td class="lch_cel">{{$t->endereco}}, {{$t->cidade}} - {{$t->uf}}</td>
		<td>
			<div id="lch_normal">
				<button class="btn btn-info mb-2" id="ed" data-toggle="modal" data-target="#modal_mais" onclick="lc_modal_mais(<?php echo $t->id; ?>);">+ Mais</button>&nbsp;
				<button class="btn btn-danger mb-2" id="ed" data-toggle="modal" data-target="#modal_del" onclick="lc_modal_del(<?php echo $t->id; ?>);">Excluir</button></td>
			</div>
			<div id="lch_small">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Opção
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#" data-toggle="modal" data-target="#modal_mais" onclick="lc_modal_mais(<?php echo $t->id; ?>);">&nbsp;&nbsp;+ Mais</a></li>
						<li><a href="#" data-toggle="modal" data-target="#modal_del" onclick="lc_modal_del(<?php echo $t->id; ?>);">&nbsp;&nbsp;Excluir</a></li>
					</ul>
				</div>
			</div>
	</tr>

	@endforeach
</table>
{{ $table->render() }}