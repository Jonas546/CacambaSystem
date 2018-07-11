<script type="text/javascript" src="{{ asset('js/cacamba/cb_edit.js')}}"></script>

<form class="form-inline" method="post" enctype="multipart/form-data" role="form" id="cbform1" action="">
	@csrf
    <input type="hidden" name="id" id="cod" value="">
  <div class="form-group mb-2">
    <input type="text" readonly class="form-control-plaintext" " value="Nº da Caçamba">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" id="numb" name="numb" placeholder="Nº da Caçamba" onkeyup="num(this);"/>
    <input type="hidden" name="status" id="status" value="Livre">
  </div>
  <button type="submit" class="btn btn-primary mb-2" id="btn">Salvar</button>
</form>
<br/>

<div id='message'></div>
