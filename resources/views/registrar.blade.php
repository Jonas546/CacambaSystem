@extends('layout')

@section('title', 'Caçambas System - Registrar')

@section('content')

<input type="hidden" id="h_menu" value='default'>

<script type="text/javascript" src="{{ asset('js/cacamba/cacamba_validator.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/numb_validator.js')}}"></script>

<div class="container">
<br/>
<h2>Registrar Caçamba</h2>
<br/>
<form class="form-inline" method="post" enctype="multipart/form-data" role="form" id="cbform" action="">
	@csrf
  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" " value="Nº da Caçamba">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="numb" name="numb" placeholder="Nº da Caçamba" onkeyup="num(this);"/>
    <input type="hidden" name="status" id="status" value="Livre">
  </div>
  <button type="submit" class="btn btn-primary mb-2" id="btns">Registrar</button>
</form>
<br/>

<div id="message">

</div>

</div>

@stop
