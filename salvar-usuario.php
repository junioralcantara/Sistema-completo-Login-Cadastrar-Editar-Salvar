<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO usuario (
						nome_usuario, 
						email_usuario, 
						senha_usuario, 
						tipo_usuario, 
						status_usuario, 
						data_usuario
					) VALUES (
						'".$_POST["nome_usuario"]."', 
						'".$_POST["email_usuario"]."', 
						'".md5($_POST["senha_usuario"])."', 
						'".$_POST["tipo_usuario"]."', 
						'1', 
						'".date("Y-m-d")."'
					)";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE usuario SET nome_usuario='".$_POST["nome_usuario"]."', email_usuario='".$_POST["email_usuario"]."', tipo_usuario='".$_POST["tipo_usuario"]."', status_usuario='".$_POST["status_usuario"]."' WHERE id_usuario=".$_POST["id_usuario"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editou com sucesso');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Excluiu com sucesso');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=listar-usuario';</script>";
			}
			break;
	}