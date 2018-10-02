<style>
@media screen and (max-width: 605px){
	
	#dp_cel{
		display:none;
	}
	
	#dp_cel{
		display:none;
	}
	
	#dp_data{
		font-size: 15px;
	}
	
}

</style>

@include('links')

@if(isset($table))
<table class='table table-striped'>
	<tr>
		<td>Id</td>
		<td id='dp_cel'>Descrição</td>
		<td id='dp_cel'>Tipo</td>
		<td id='dp_cel'>Data</td>
		<td id='dp_cel'>Qtde</td>
		<td>Valor</td>
		<td id='dp_cel'>Responsável</td>
		<td>Opção</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->id}}</td>
		<td id='dp_cel'>{{$t->nome}}</td>
		<td id='dp_cel'>{{$t->descricao}}</td>
		<td id='dp_cel'><?php echo date('d/m/y', strtotime($t->data)); ?></td>
		<td id='dp_cel'>{{$t->qtde}}</td>
		<td>R$ <?php echo number_format($t->valor, 2, ',',''); ?></td>
		<td id='dp_cel'>{{$t->func}}</td>
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