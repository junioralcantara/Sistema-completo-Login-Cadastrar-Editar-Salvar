<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Sistema de Atendimento</title>
  </head>
  <body id="LoginForm" class="login">
    <div class="container mt-5">
      <div class="login-form row">
        <div class="main-div col-lg-4 offset-lg-4">
          <div class="painel">
            <h2>Acesso Restrito</h2>
            <p>Por favor, entre com seu e-mail e senha</p>
          </div>
          <form id="Login" action="login.php" method="POST">
            <div class="mb-3">
              <input type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="mb-3">
              <input type="password" name="senha" class="form-control" placeholder="Senha">
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
          <div class="row">
            <div class="col-12">
              <p><a href="recuperar_senha.php">Esqueceu sua senha?</a></p>
              <p><a href="">Sem conta? Cadastre-se</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
