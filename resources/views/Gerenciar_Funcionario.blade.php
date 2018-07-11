@extends('layout')

@section('title', 'Caçambas System - Gerenciar Funcionários')

@section('content')

<input type="hidden" id="h_menu" value='fc'>

<script type="text/javascript" src="{{ asset('js/numb_validator.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/cacamba/cb_modal.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/funcionario/fc_modal_mais.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/funcionario/fc_edit.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cacamba/cb_pag.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/funcionario/fc_search.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/funcionario/fc_del_get.js') }}"></script>

<div class="container">
<br/>
<h2>Gerenciar Funcionários</h2>
<br/>
<div id="cb_table">
@include('fc_table')
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
          <h4 class="modal-title">Editar Funcionário</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          @include('fc_edit')
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
          @include('fc_mais')
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

