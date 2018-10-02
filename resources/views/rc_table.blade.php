<style>
@media screen and (min-width: 598px) and (max-width: 605px){
	
	#rc_data{
		font-size: 15px;
	}
	
}

@media screen and (max-width: 482px){
	
	#rc_cel{
		display:none;
	}
	
	#rc_data{
		font-size: 15px;
	}
	
}

</style>

@include('links')

@if(isset($table))
<table class='table table-striped' id='rc_data'>
	<tr>
		<td>Id</td>
		<td>Cliente</td>
		<td>Caçamba</td>
		<td id='rc_cel'>Data</td>
		<td id='rc_cel'>Dias</td>
		<td id='rc_cel'>Valor</td>
	</tr>

	@foreach($table as $t)

	<tr>
		<td>{{$t->id}}</td>
		<td>{{$t->cliente}}</td>
		<td>{{$t->id_cacamba}}</td>
		<td id='rc_cel'><?php echo date('d/m/y', strtotime($t->inicio)); ?></td>
		<td id='rc_cel'>{{$t->dias}}</td>
		<td id='rc_cel'>R$ <?php echo number_format($t->total, 2, ',',''); ?></td>
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