@extends('layout')

@section('title', 'Caçambas System - Novo Usuário')

@section('content')

<input type="hidden" id="h_menu" value='default'>

<script type="text/javascript" src="{{ asset('js/jquery.mask.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/fc_mask.js') }}"></script>
<script type="text/javascript" src="{{asset('js/user/user_store.js')}}"></script>

<div class="container">
<br/>
<h2>Registrar Novo Usuário</h2>
<br/>
<form method="post" enctype="multipart/form-data" role="form" id="usform" name="usform" action="">
	@csrf

  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Usuário:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="user" name="user" placeholder="Digite o Usuário">
  </div>
 </div>

  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">E-mail:</label>  
  <div class="col-sm-10">
  <input type="email" class="form-control" id="email" name="email" placeholder="Digite o E-mail">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Senha:</label>  
  <div class="col-sm-10">
  <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite a Senha">
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
