@include('links')

@if(isset($table))
<table class='table table-striped'>
	<tr>
		<td>Id</td>
		<td>Cliente</td>
		<td>Caçamba</td>
		<td>Data</td>
		<td>Dias</td>
		<td>Valor</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->id}}</td>
		<td>{{$t->cliente}}</td>
		<td>{{$t->id_cacamba}}</td>
		<td><?php echo date('d/m/y', strtotime($t->inicio)); ?></td>
		<td>{{$t->dias}}</td>
		<td>R$ <?php echo number_format($t->total, 2, ',',''); ?></td>
	</tr>

	@endforeach

</table>

<form action='/rel_receitas' method='post' target='_blank' enctype="multipart/form-data" role="form">
  @csrf
  <input type='hidden' id='d_inicio' name='d_inicio' value="{{$inicio}}">
  <input type='hidden' id='d_volta' name='d_volta' value="{{$fim}}">
  <button class='btn btn-primary mb-2' type='submit' id='brsearch'>Gerar PDF</button>
</form>

@endif

@if(isset($error))

<div id="primary" class="alert alert-primary">{{$error}}</div>

@endif