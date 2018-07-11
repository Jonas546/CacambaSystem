<script type="text/javascript" src="{{ asset('js/fc_mask.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/funcionario/fc_update.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mask.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/funcionario/fc_del.js') }}"></script>

<form method="post" enctype="multipart/form-data" role="form" id="fcd_form" action="">
 
  @csrf
<input type="hidden" name="cargo" id=cargo value="">
<input type="hidden" id="cod1" value="">

  <label for="staticEmail" class="col-sm-2 col-form-label">Data:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="dem" readonly placeholder="Digite a Data de Demissão">
  <script>
    $('#dem').datepicker({
      uiLibrary: 'bootstrap4'
    });
  </script>
  </div>

  <br/>
  <div class="col-sm-10">
  <button type="submit" class="btn btn-danger mb-2" id="btndfc">Desligar</button>
  </div>

  <br/>

  <div class="col-sm-10">

  <div id="error1" class="alert alert-danger"></div>
  <div id="warning1" class="alert alert-warning"></div>
  <div class="alert alert-success" id="success1"></div>  

  </div>

</form>

