@extends('layout')

@section('title', 'Caçambas System - Histórico de Locações')

@section('content')

<input type="hidden" id="h_menu" value='lch'>

<script type="text/javascript" src="{{ asset('js/historico/lch_modal_mais.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/historico/lch_del.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cacamba/cb_pag.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/historico/lch_search.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/historico/lch_delete.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/numb_validator.js')}}"></script>

<div class="container">
<br/>
<h2>Histórico de Locações</h2>
<br/>
<div id="cb_table">
@include('lc_hist')
</div>
<div id="message2"></div>
<br/><br/>

</div>

<!-- Modal para deletar -->

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
          @include('lch_del')
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

@stop

