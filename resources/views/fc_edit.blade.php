<script type="text/javascript" src="{{ asset('js/fc_mask.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/funcionario/fc_update.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mask.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/funcionario/fc_edit.js')}}"></script>

<form method="post" enctype="multipart/form-data" role="form" id="fce_form" action="">
 
  @csrf
<input type="hidden" name="cargo" id=cargo value="">
<input type="hidden" id="cod" value="">

  <label for="staticEmail" class="col-sm-2 col-form-label">Nome:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="nome" placeholder="Digite o Nome">
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">RG:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite o RG">
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">CPF:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF">
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">Tel:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="tel" name="tel" placeholder="Digite o Telefone">
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">E-mail:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email">
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">Nasc.:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="nasc" readonly nasc="nasc" placeholder="Digite a Data de Nascimento">
  <script>
    $('#nasc').datepicker({
      uiLibrary: 'bootstrap4'
    });
  </script>
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">Cargo:</label>  
  <div class="col-sm-10">
  <select class="custom-select mr-sm-2" id="cargos" name="cargos">
    <option selected>Escolha...</option>
    <option>Atendente</option>
    <option>Gerente</option>
    <option>Motorista</option>
    <option>Porteiro</option>
  </select>
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">Endereço:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="end" name="end" placeholder="Digite a Endereço Completo">
  </div>


  <label for="staticEmail" class="col-sm-2 col-form-label">Cep:</label> <div class="col-sm-10">
  <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o Cep">
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">Cidade:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a Cidade">
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">UF:</label> <div class="col-sm-10">
  <input type="text" class="form-control" id="uf" name="uf"placeholder="Digite o Estado" maxlength="2">
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">Admissão:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="adm" name="adm" readonly placeholder="Digite a Data de Admissão">
  <script>
    $('#nasc').datepicker({
      uiLibrary: 'bootstrap4'
    });
  </script>
  </div>

  <label for="staticEmail" class="col-sm-2 col-form-label">Salário:</label>  
  <div class="col-sm-10">
  <input type="text" class="form-control" id="salario" name="salario" placeholder="Digite o Salário">
  </div>

  <br/>
  <div class="col-sm-10">
  <button type="submit" class="btn btn-primary mb-2" id="btnefc">Editar</button>
  </div>

  <br/>

  <div class="col-sm-10">

  <div id="error" class="alert alert-danger"></div>
  <div id="warning" class="alert alert-warning"></div>
  <div class="alert alert-success" id="success"></div>  

  </div>

</form>

