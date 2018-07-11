@extends('layout')

@section('title', 'Caçambas System - Registrar Funcionario')

@section('content')

<input type="hidden" id="h_menu" value='default'>

<script type="text/javascript" src="{{ asset('js/jquery.mask.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/fc_mask.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/funcionario/fc_validator.js')}}"></script>

<div class="container">
<br/>
<h2>Registrar Funcionários</h2>
<br/>
<form method="post" enctype="multipart/form-data" role="form" id="fcform" action="">
	@csrf
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Nome:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome">
  </div>
 </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">RG:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite o RG">
  </div>
 </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">CPF:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF">
  </div>
 </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Telefone:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="tel" name="tel" placeholder="Digite o Telefone">
  </div>
 </div>
   <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">E-mail:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email">
  </div>
 </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Data de Nascimento:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="nasc" name="nasc" readonly placeholder="Digite a Data de Nascimento">
        <script>
        $('#nasc').datepicker({
          uiLibrary: 'bootstrap4'
        });
      </script>
  </div>
 </div>
 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Endereço:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="end" name="end" placeholder="Digite a Endereço Completo">
  </div>
 </div>
 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Cep:</label> <div class="col-sm-10">
  <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o Cep">
  </div>
 </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Cidade:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a Cidade">
  </div>
 </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">UF:</label> <div class="col-sm-10">
  <input type="text" class="form-control" id="uf" name="uf" placeholder="Digite o Estado" maxlength="2">
  </div>
 </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Data de Admissão:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="adm" name="adm" readonly placeholder="Digite a Data de Admissão">
        <script>
        $('#adm').datepicker({
          uiLibrary: 'bootstrap4'
        });
      </script>
  </div>
 </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Cargo:</label>  
  <div class="col-sm-10">
  <select class="custom-select mr-sm-2" id="cargo" name="cargo">
    <option selected>Escolha...</option>
    <option>Atendente</option>
    <option>Gerente</option>
    <option>Motorista</option>
    <option>Porteiro</option>
  </select>
  </div>
 </div>
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Salário:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="salario" name="salario" placeholder="Digite o Salário">
  </div>
 </div>
   <button type="submit" class="btn btn-primary mb-2" id="btnfc">Registrar</button>
</form>
<br/>

<div id="error" class="alert alert-danger"></div>
<div id="warning" class="alert alert-warning"></div>
<div class="alert alert-success" id="success"></div>
</div>

@stop
