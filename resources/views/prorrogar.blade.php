<form method="post" action="" id="lc_edit">
  @csrf

  <input type="hidden" id="eunit" value="">
  <input type="hidden" id="eid" value="">

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Data de Saída:</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="esaida" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Data de Retorno:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="evolta" readonly placeholder="Data de Retorno" value="">
      <script>
        $('#evolta').datepicker({
          uiLibrary: 'bootstrap4'
        });
      </script>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Dias:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="edias" placeholder="Quantidade de Dias" value="">
    </div>
  </div>
  <button class="btn btn-primary mb-2" id="btnep" type="submit">Prorrogar</button>
</form>

<div id='message1'></div>
