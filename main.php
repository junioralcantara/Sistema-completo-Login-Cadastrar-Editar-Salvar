<div class="col-lg-4 mt-5">
  <div class="card text-white bg-success mb-3">
    <div class="card-header">ABERTOS</div>        
    <div class="card-body">
      <p>Acesse os tickets que estão com estatus em aberto, por data.</p>
      <a href="?page=listar-ticket&status=1" class="btn btn-light">Acesso</a>
    </div>
  </div>
</div>
<div class="col-lg-4 mt-5">
  <div class="card text-black bg-warning mb-3">
    <div class="card-header">EM ANDAMENTO</div>        
    <div class="card-body">
      <p>Acesse os tickets que estão com estatus em andamento</p>
      <a href="?page=listar-ticket&status=2" class="btn btn-light">Acesso</a>
    </div>
  </div>
</div>
<div class="col-lg-4 mt-5">
  <div class="card text-white bg-danger mb-3">
    <div class="card-header">FECHADOS</div>        
    <div class="card-body">
      <p>Acesse os tickets que estão com estatus fechados e podem ser reabertos.</p>
      <a href="?page=listar-ticket&status=3" class="btn btn-light">Acesso</a>
    </div>
  </div>
</div>
<?php if($_SESSION["tipo"]=="2"){ ?>
<div class="col-lg-12" align="center">
  <a href="?page=novo-ticket" class='btn btn-primary btn-lg'>Abrir Novo Chamado</a>
</div>
<?php } ?>