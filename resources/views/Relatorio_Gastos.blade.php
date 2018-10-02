@extends('layout')

@section('title', 'Caçambas System - Relatório de Despesas')

@section('content')

<style type="text/css">
  
iframe {

}

</style>

<input type="hidden" id="h_menu" value='default'>

<script type="text/javascript" src="{{asset('js/financeiro/rel_gasto.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/numb_validator.js')}}"></script>

<div class="container">
<br/>
<h2>Relatório de Despesas</h2>

<h5>Período</h5>

	<div class="row">
	
	<form method="post" enctype="multipart/form-data" role="form" id="dpform" action="/get_gastos" target="dp_frame">
		@csrf
  
		<div class="col">
			<input type="text" id='data_inicio' name='data_inicio' class="form-control" readonly placeholder="Data Inicial">
			<script>
				$('#data_inicio').datepicker({
					uiLibrary: 'bootstrap4'
				});
			</script>
		</div>
		<br/>
		<div class="col">
			<input type="text" class="form-control" readonly id='data_fim' name='data_fim' placeholder="Data Final">
			<script>
				$('#data_fim').datepicker({
				uiLibrary: 'bootstrap4'
				});
			</script>
		</div>
		<br/>
		<div class="col">
			<button class="btn btn-primary mb-2" type="submit" id="brsearch">Buscar</button>
		</div>
		
	</form>	
		
  </div>

</br>

<div id="message"></div>
<div id="dp_table" class="embed-responsive embed-responsive-1by1">
  <iframe name="dp_frame" scrolling="no" frameborder="0" class="embed-responsive-item"></iframe>
</div>

</div>

@stop

