@extends('layout')

@section('title', 'Caçambas System - Home')

@section('content')

<style type="text/css">
footer {
background-color: #555;
color: #fff;
}
</style>

<input type="hidden" id="h_menu" value='default'>

<div class="container">
<br/>
<h2>Caçambas System</h2>
</br>

<div id="h_normal">
	<div class="row">

		<div class="col-md-3" >
			<img src="{{ asset('img/cacamba.png')}}" class="img-thumbnail">
			<p>Obrigado por escolher o Caçamba System. Este é o seu novo sistema gerenciador de locação e transporte de Caçambas.</p>
		</div>

		<div class="col-md-3">
			<img src="{{ asset('img/func.jpg')}}" class="img-thumbnail">
			<p>Nosso Sistema conta com funções para o gerenciamento do Quadro de Funcionários de sua Empresa.</p>
		</div>

		<div class="col-md-3">
			<img src="{{ asset('img/truck.jpg')}}" class="img-thumbnail">
			<p>São gerenciados dados das locações, que vão desde informações do cliente, passando por datas e valores até informações sobre o transporte da Caçamba alugada.</p>
		</div>

		<div class="col-md-3">
			<img src="{{ asset('img/rel.png')}}" class="img-thumbnail">
			<p>Relatórios sobre Locações e Despesas poderão ser emitidos via Sistema e disponibilizados para Impressão.</p>
		</div>

	</div>
</div>

<div id="h_middle">
	<div class="row">

		<div class="col-md-6" >
			<img src="{{ asset('img/cacamba.png')}}" class="img-thumbnail">
			<p>Obrigado por escolher o Caçamba System. Este é o seu novo sistema gerenciador de locação e transporte de Caçambas.</p>
		</div>

		<div class="col-md-6">
			<img src="{{ asset('img/func.jpg')}}" class="img-thumbnail">
			<p>Nosso Sistema conta com funções para o gerenciamento do Quadro de Funcionários de sua Empresa.</p>
		</div>

		<div class="col-md-6">
			<img src="{{ asset('img/truck.jpg')}}" class="img-thumbnail">
			<p>São gerenciados dados das locações, que vão desde informações do cliente, passando por datas e valores até informações sobre o transporte da Caçamba alugada.</p>
		</div>

		<div class="col-md-6">
			<img src="{{ asset('img/rel.png')}}" class="img-thumbnail">
			<p>Relatórios sobre Locações e Despesas poderão ser emitidos via Sistema e disponibilizados para Impressão.</p>
		</div>

	</div>
</div>

  <br/><br/><br/>

</div>

<footer class="container-fluid">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright: Caçambas System<p></p></div>
  <!-- Copyright -->

</footer>

@stop

