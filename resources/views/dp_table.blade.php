@include('links')

@if(isset($table))
<table class='table table-striped'>
	<tr>
		<td>Id</td>
		<td>Descrição</td>
		<td>Tipo</td>
		<td>Data</td>
		<td>Qtde</td>
		<td>Valor</td>
		<td>Responsável</td>
		<td>Opção</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->id}}</td>
		<td>{{$t->nome}}</td>
		<td>{{$t->descricao}}</td>
		<td><?php echo date('d/m/y', strtotime($t->data)); ?></td>
		<td>{{$t->qtde}}</td>
		<td>R$ <?php echo number_format($t->valor, 2, ',',''); ?></td>
		<td>{{$t->func}}</td>
		<td><a href='/del_gastos/{{$t->id}}' class='btn btn-danger mb-2' id='ex'>Excluir</a></td>
	</tr>

	@endforeach

</table>

<form action='/rel_gastos' method='post' target='_blank' enctype="multipart/form-data" role="form">
  @csrf
  <input type='hidden' id='d_inicio' name='d_inicio' value="{{$inicio}}">
  <input type='hidden' id='d_volta' name='d_volta' value="{{$fim}}">
  <button class='btn btn-primary mb-2' type='submit' id='brsearch'>Gerar PDF</button>
</form>

@endif

@if(isset($error))

<div id="primary" class="alert alert-primary">{{$error}}</div>

@endif