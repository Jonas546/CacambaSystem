@extends('layout')

@section('title', 'Caçambas System - Gerenciar Locações')

@section('content')

<input type="hidden" id="h_menu" value='lc'>

<script type="text/javascript" src="{{ asset('js/locacao/finalizar.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/locacao/prorrogar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/locacao/lc_modal_mais.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/locacao/lc_edit.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cacamba/cb_pag.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/locacao/lc_search.js') }}"></script>
<script type="text/javascript" src="{{ asset('js//locacao/lc_fin.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/numb_validator.js')}}"></script>

<div class="container">
<br/>
<h2>Gerenciar Locações</h2>
<br/>
<div id="cb_table">
@include('lc_table')
</div>
<div id="message2"></div>
<br/><br/>

</div>

<!-- Modal para Editar -->

<!-- The Modal -->
  <div class="modal fade" id="modal_edit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Prorrogar Locação</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          @include('prorrogar')
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<!-- Modal para Mais -->

<!-- The Modal -->
  <div class="modal fade" id="modal_mais">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Dados do Funcionário</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          @include('lc_mais')
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

<!-- Modal para finalizar -->

<!-- The Modal -->
  <div class="modal fade" id="modal_fin">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Finalizar Locação</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          @include('finalizar')
        </div>
        
      </div>
    </div>
  </div>

<!-- Modal para Excluir -->

<!-- The Modal -->
  <div class="modal fade" id="modal_del">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Desligar Funcionário</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          @include('fc_del')
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

@stop

