<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Sistema de Atendimento</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Ticket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard.php">Início</a>
            </li>
            <?php if($_SESSION["tipo"]=="1"){ ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuários
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="?page=listar-usuario">Listar</a></li>
                <li><a class="dropdown-item" href="?page=cadastrar-usuario">Cadastrar</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="?page=listar-categoria">Listar</a></li>
                <li><a class="dropdown-item" href="?page=cadastrar-categoria">Cadastrar</a></li>
              </ul>
            </li>
            <?php } ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tickets
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="?page=listar-ticket">Listar Tickets</a></li>
                <li><a class="dropdown-item" href="?page=listar-ticket&status=1">Abertos</a></li>
                <li><a class="dropdown-item" href="?page=listar-ticket&status=2">Em Andamento</a></li>
                <li><a class="dropdown-item" href="?page=listar-ticket&status=3">Fechados</a></li>
              </ul>
            </li>
          </ul>
          <span class="navbar-text">
            Olá, <?php print $_SESSION["nome"]; ?> <a href="logout.php" class="btn btn-outline-success btn-sm">Sair</a>
          </span>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <?php
          //arquivo de configuação do banco de dados
          include('config.php');
          //aqui chamam as páginas pela dashboard
          switch (@$_REQUEST["page"]) {
            //categoria
            case 'cadastrar-categoria':
              include('cadastrar-categoria.php');
              break;
            case 'listar-categoria':
              include('listar-categoria.php');
              break;
            case 'editar-categoria':
              include('editar-categoria.php');
              break;
            case 'salvar-categoria':
              include('salvar-categoria.php');
              break;
            //usuarios
            case 'cadastrar-usuario':
              include('cadastrar-usuario.php');
              break;
            case 'listar-usuario':
              include('listar-usuario.php');
              break;
            case 'editar-usuario':
              include('editar-usuario.php');
              break;
            case 'salvar-usuario':
              include('salvar-usuario.php');
              break;
            //tickets
            case 'novo-ticket':
              include('novo-ticket.php');
              break;
            case 'listar-ticket':
              include('listar-ticket.php');
              break;
            case 'salvar-ticket':
              include('salvar-ticket.php');
              break;
            case 'atendimento-ticket':
              include('atendimento-ticket.php');
              break;
            
            default:
              include('main.php');
          }
        ?>
      </div>
    </div>    
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
