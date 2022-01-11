<div class="col-lg-12">
	<h1>Listar Tickets</h1>
	<?php
		if($_SESSION["tipo"]=="1"){
			if(empty($_REQUEST["status"])){
				$sql = "SELECT * FROM mensagem";
			}else{
				$sql = "SELECT * FROM mensagem WHERE status_mensagem=".$_REQUEST["status"];
			}		
		}else{
			if(empty($_REQUEST["status"])){
				$sql = "SELECT * FROM mensagem WHERE usuario_id_usuario=".$_SESSION["id"];
			}else{
				$sql = "SELECT * FROM mensagem WHERE status_mensagem=".$_REQUEST["status"]." AND usuario_id_usuario=".$_SESSION["id"];
			}
			
		}

		$res = $conn->query($sql) or die($conn->error);

		if($res->num_rows > 0){
			print "<table class='table table-striped table-hover'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Título</th>";
			print "<th>Data</th>";
			print "<th>Hora</th>";
			print "<th>Status</th>";
			print "</tr>";
			while($row = $res->fetch_object()){
				if($row->status_mensagem=="1"){
					$status = "Novo Ticket";
				}elseif($row->status_mensagem=="2"){
					$status = "Em andamento";				
				}else{
					$status = "Fechado";
				}
				print "<tr>";
				print "<td>".$row->id_mensagem."</td>";
				print "<td><a href='?page=atendimento-ticket&id_mensagem=".$row->id_mensagem."'>".$row->titulo_mensagem."</a></td>";
				print "<td>".$row->data_mensagem."</td>";
				print "<td>".$row->hora_mensagem."</td>";
				print "<td>".$status."</td>";
				print "</tr>";
			}
			print "</table>";
		}else{
			print "<div class='alert alert-danger'>Não há nenhum ticket.</div>";
		}
	?>
</div>