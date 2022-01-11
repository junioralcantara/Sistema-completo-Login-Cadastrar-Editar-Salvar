<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Sistema de Atendimento</title>
  </head>
  <?php
  include("config.php");
  ?>
  <body id="LoginForm" class="login">
    <div class="container mt-5">
      <div class="login-form row">
        <div class="main-div col-lg-4 offset-lg-4">
          <div class="painel">
            <h2>Recuperar senha</h2>
            <p>Por favor, digite seu email cadastrado</p>
          </div>
          <form id="Login" action="login.php" method="POST">
            <div class="mb-3">
              <input type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Recuperar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>