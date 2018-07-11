@extends('layout')

@section('title', 'Caçambas System - Novo Usuário')

@section('content')

<input type="hidden" id="h_menu" value='default'>

<script type="text/javascript" src="{{ asset('js/jquery.mask.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/fc_mask.js') }}"></script>
<script type="text/javascript" src="{{asset('js/user/user_change.js')}}"></script>

<div class="container">
<br/>
<h2>Mudar Senha</h2>
<br/>
<form method="post" enctype="multipart/form-data" role="form" id="usupform" name="usupform" action="">
	@csrf

  <input type="hidden" name="user" id="user" value="{{$id}}">
  <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label">Senha:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a Senha">
  </div>
 </div>

 <div class="form-group row">
  <label for="staticEmail" class="col-sm-2 col-form-label"></label>  
  <div class="col-sm-10">
  <input type="password" class="form-control" id="senha1" name="senha1" placeholder="Digite Novamente a Senha">
  </div>
 </div>

<table>
  <tr>
    <th><button type="submit" class="btn btn-primary mb-2" id="btngt">Mudar</button></th>
  </tr>
</table>    
</form>
<br/>

<div id="message"></div>

</div>

@stop
