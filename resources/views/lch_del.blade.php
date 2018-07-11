<style type="text/css">
.well {
   position: absolute;
   top: -25%;
   right: 50%;
   transform: translate(50%, 50%);
}
</style>
<form id="delform" action="" method="post" enctype="multipart/form-data" role="form">
@csrf
<input type="hidden" id="id1" value="">
<div class="well">
<button class="btn btn-primary mb-2" id="ex11" type="submit">Sim</button>
<button class="btn btn-danger mb-2" id="ex2" data-dismiss="modal">Não</button>
</div>
</form>
<br/>
<div id="message1"></div>