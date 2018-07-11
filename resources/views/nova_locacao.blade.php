@extends('layout')

@section('title', 'Caçambas System - Registrar Funcionario')

@section('content')

<input type="hidden" id="h_menu" value='default'>

<script type="text/javascript" src="{{ asset('js/jquery.mask.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/fc_mask.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/locacao/lc_store.js')}}"></script>

<div class="container">
<br/>
<h2>Nova Locação</h2>
<br/>
<form method="post" enctype="multipart/form-data" role="form" id="lcform" action="">
	@csrf

  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Cliente:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="cliente" placeholder="Digite o Nome do Cliente">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Endereço:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="end" placeholder="Digite a Endereço Completo">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Cep:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="cep" placeholder="Digite o Cep">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Cidade:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="cidade" placeholder="Digite a Cidade">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Uf:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="uf" placeholder="Digite a UF">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Valor Unitário:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="unit" placeholder="Digite o Valor por Dia">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Dias:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="dia" placeholder="Digite a Quantidade de Dias">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Dia da Saída:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="saida" readonly placeholder="Digite a Data de Saída">
  <script>
    $('#saida').datepicker({
        uiLibrary: 'bootstrap4'
    });
  </script>
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Data de Retorno:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="volta" readonly placeholder="Digite a Data de Retorno">
  <script>
    $('#volta').datepicker({
      uiLibrary: 'bootstrap4'
    });
 </script>
  </div>
 </div>

 <div class="form-group row">
 <label for="staticEmail" class="col-sm-2 col-form-label">Caçamba:</label>  
 <div class="col-sm-10">
 <select class="custom-select mr-sm-2" id="cb">
    <option selected>Escolha...</option>

    @foreach ($cacamba as $c)

    <option value="{{$c->id}}">{{$c->numero}}</option>

    @endforeach

 </select>
 </div>
 </div>

<div class="form-group row">
 <label for="staticEmail" class="col-sm-2 col-form-label">Mororista Saída:</label>  
 <div class="col-sm-10">
 <select class="custom-select mr-sm-2" id="fci">
    <option selected>Escolha...</option>

    @foreach ($motorista as $m)

    <option value="{{$m->id}}">{{$m->nome}}</option>

    @endforeach

 </select>
 </div>
 </div>

 <div class="form-group row">
 <label for="staticEmail" class="col-sm-2 col-form-label">Mororista Retorno:</label>  
 <div class="col-sm-10">
 <select class="custom-select mr-sm-2" id="fcr">
    <option selected>Escolha...</option>

    @foreach ($motorista as $m)

    <option value="{{$m->id}}">{{$m->nome}}</option>

    @endforeach

 </select>
 </div>
 </div>

<table>
  <tr>
    <th><button type="submit" class="btn btn-primary mb-2" id="btnlc">Fechar Locação</button></th>
    <th><div id="nota">
    </div>
    </th>
  </tr>
</table>    
</form>
<br/>

<div id="message"></div>

</div>

@stop
