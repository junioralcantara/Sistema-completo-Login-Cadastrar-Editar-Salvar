<?php
	switch ($_REQUEST["acao"]) {
		case 'novo':
			$sql = "INSERT INTO mensagem (categoria_id_categoria, usuario_id_usuario, titulo_mensagem, texto_mensagem, data_mensagem, hora_mensagem, status_mensagem) VALUES (".$_POST["categoria_id_categoria"].", ".$_POST["id_usuario"].", '".$_POST["titulo_mensagem"]."', '".$_POST["texto_mensagem"]."', '".date("Y-m-d")."', '".date("H:i:s")."', '1')";
			
			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<script>alert('Ticket aberto com sucesso! Aguarde atendimento!');</script>";
				print "<script>location.href='dashboard.php';</script>";
			}else{
				print "<script>alert('Não foi possível abrir ticket.');</script>";
				print "<script>location.href='dashboard.php';</script>";
			}
			break;
		
		case 'responder':
			$sql = "INSERT INTO atendimento (mensagem_id_mensagem, usuario_id_usuario, texto_atendimento, data_atendimento, hora_atendimento) VALUES (".$_POST["id_mensagem"].", ".$_POST["id_usuario"].", '".$_POST["texto_atendimento"]."', '".date("Y-m-d")."', '".date("H:i:s")."')";

			$res = $conn->query($sql) or die($conn->error);

			$sql_1 = "UPDATE mensagem SET status_mensagem='2' WHERE id_mensagem=".$_POST["id_mensagem"];

			$res_1 = $conn->query($sql_1) or die($conn->error);

			if($res==true){
				print "<script>alert('Ticket Respondido');</script>";
				print "<script>location.href='?page=listar-ticket';</script>";
			}else{
				print "<script>alert('Não foi possível responder.');</script>";
				print "<script>location.href='?page=listar-ticket';</script>";
			}
		break;
	}