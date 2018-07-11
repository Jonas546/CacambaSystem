@extends('layout')

@section('title', 'Caçambas System - Gerenciar')

@section('content')

<input type="hidden" id="h_menu" value='cb'>

<script type="text/javascript" src="{{ asset('js/numb_validator.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/cacamba/cb_modal.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cacamba/cb_modal1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cacamba/cb_delete.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cacamba/cb_pag.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cacamba/cb_search.js') }}"></script>

<div class="container">
<br/>
<h2>Gerenciar Caçambas</h2>
<br/>
<div id="cb_table">
@include('cb_table')
</div>
<div id="message2"></div>
<br/><br/>

<!-- Modal para Editar -->

<!-- The Modal -->
  <div class="modal fade" id="modal_edit">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Editar Caçamba</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          @include('cacamba_edit')
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
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Deseja Excluir?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          @include('cb_del')
        </div>
        
      </div>
    </div>
  </div>

</div>
@stop

