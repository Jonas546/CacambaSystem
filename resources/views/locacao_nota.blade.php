<title>Nota de Locação</title>
<style type="text/css">
  
.table{
border-collapse: collapse;
border-style: solid;
border-width: thin;
width: 670px;
}

.table tr th{
border:1px 
solid #000000;
}

.table th {
padding-left: 5px;
padding-top: 5px;
padding-bottom: 5px;
text-align: left;
}

h1, h3{
  font-family: Helvetica, sans-serif;
}

</style>

<div class="container" style="padding: 30px; margin-top: -20px;">

<h1>Nome da sua Empresa</h1>
<h3>Recibo de Locação</h3>

@foreach($query as $q)

<table class="table">
  <thead>
    <tr>
      <th># do Pedido</th>
      <th>Cliente</th>
      <th>Cep</th>
      <th>Localidade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>{{$q->id}}</th>
      <th>{{$q->cliente}}</th>
      <th>{{$q->cep}}</th>
      <th>{{$q->cidade}} - {{$q->uf}}</th>
    </tr>
  </tbody>
   <thead>
    <tr>
      <th># da Caçamba</th>
      <th>Data de Retirada</th>
      <th colspan="2">Data de Devolução</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>{{$q->id_cacamba}}</th>
      <th><?php echo date("d/m/Y", strtotime($q->inicio)); ?></th>
      <th colspan="2"><?php echo date("d/m/Y", strtotime($q->fim)); ?></th>
    </tr>
  </tbody>
    <thead>
    <tr>
      <th>Qtde de Dias</th>
      <th>Valor Diário</th>
      <th colspan="2">Valor Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>{{$q->dias}}</th>
      <th>R$ <?php echo number_format($q->valor_unit,2,",","."); ?></th>
      <th colspan="2">R$ <?php echo number_format($q->total,2,",","."); ?></th>
    </tr>
  </tbody>
</table>

@endforeach

</div>
 
