<?php
	session_start();

	if(empty($_POST) or (empty($_POST["email"]) or (empty($_POST["senha"])))){
		print "<script>location.href='index.php';</script>";
	}

	include('config.php');

	$email = $_POST["email"];
	$senha = md5($_POST["senha"]);

	$sql = "SELECT * FROM usuario WHERE email_usuario='{$email}' AND senha_usuario='{$senha}' AND status_usuario='1'";

	$res = $conn->query($sql) or die($conn->error);

	$row = $res->fetch_object();

	if($res->num_rows > 0){
		$_SESSION["email"] = $row->email_usuario;
		$_SESSION["id"] = $row->id_usuario;
		$_SESSION["nome"] = $row->nome_usuario;
		$_SESSION["tipo"] = $row->tipo_usuario;
		print "<script>location.href='dashboard.php';</script>";
	}else{
		unset($email);
		print "<script>alert('Dados incorretos ou usuário inativo');</script>";
		print "<script>location.href='index.php';</script>";
	}