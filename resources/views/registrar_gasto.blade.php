@extends('layout')

@section('title', 'Caçambas System - Registrar Gastos')

@section('content')

<input type="hidden" id="h_menu" value='default'>

<script type="text/javascript" src="{{ asset('js/jquery.mask.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/fc_mask.js') }}"></script>
<script type="text/javascript" src="{{asset('js/financeiro/registrar_gasto.js')}}"></script>

<div class="container">
<br/>
<h2>Registrar Gastos</h2>
<br/>
<form method="post" enctype="multipart/form-data" role="form" id="gtform" action="">
	@csrf

  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Descrição:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="nome" name="nome" placeholder="Descreva Aqui">
  </div>
 </div>

 <div class="form-group row">
 <label for="staticEmail" class="col-sm-2 col-form-label">Tipo:</label>  
 <div class="col-sm-10">
 <select class="custom-select mr-sm-2" id="tipo" name="tipo">
    <option value="Escolha..." selected>Escolha...</option>
	<option value="conta">Contas</option>
	<option value="material">Material</option>
	<option value="equipamento">Equipamento</option>
	<option value="veiculo">Veículos</option>
 </select>
 </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Quantidade:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="qtde" name="qtde" placeholder="Digite a Quantidade">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Valor:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o Valor">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Data:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" readonly id="data_dia" name="data_dia" placeholder="Digite a Data">
          <script>
        $('#data_dia').datepicker({
          uiLibrary: 'bootstrap4'
        });
      </script>
  </div>
 </div>

 <div class="form-group row">
 <label for="staticEmail" class="col-sm-2 col-form-label">Funcionário:</label>  
 <div class="col-sm-10">
 <select class="custom-select mr-sm-2" id="func" name="func">
    <option value="Escolha..." selected>Escolha...</option>

    @foreach($table as $t)

    <option value="{{$t->id}}">{{$t->nome}}</option>

    @endforeach

 </select>
 </div>
 </div>

<table>
  <tr>
    <th><button type="submit" class="btn btn-primary mb-2" id="btngt">Registrar</button></th>
  </tr>
</table>    
</form>
<br/>

<div id="message"></div>

</div>

@stop
