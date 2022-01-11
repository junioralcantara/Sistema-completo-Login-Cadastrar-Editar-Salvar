<div class="col-lg-12">
	<h1>Listar Usuário</h1>
	<?php
		$sql = "SELECT * FROM usuario";

		$res = $conn->query($sql) or die($conn->error);

		if($res->num_rows > 0){
			print "<table class='table table-striped'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Nome</th>";
			print "<th>E-mail</th>";
			print "<th>Tipo</th>";
			print "<th>Data de Cadastro</th>";
			print "<th>Status</th>";
			print "<th>Ações</th>";
			print "<th>PDF</th>";
			print "</tr>";
			while($row = $res->fetch_object()){
				if($row->tipo_usuario=="1"){
					$tipo = "Administrador";
				}else{
					$tipo = "Usuário Comum";
				}
				if($row->status_usuario=="1"){
					$status = "Ativo";
				}else{
					$status = "Inativo";
				}
				print "<tr>";
				print "<td>".$row->id_usuario."</td>";
				print "<td>".$row->nome_usuario."</td>";
				print "<td>".$row->email_usuario."</td>";
				print "<td>".$tipo."</td>";
				print "<td>".$row->data_usuario."</td>";
				print "<td>".$status."</td>";
				print "<td> 
						 <button class='btn btn-primary' onclick=\"location.href='?page=editar-usuario&id_usuario=".$row->id_usuario."';\">Editar</button>

						 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-usuario&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\">Excluir</button>
					   </td>";
					   print "<td><a href='relatorio.php?id=".$row->id_usuario."'>PDF</a></td>";
				print "</tr>";
			}
			print "</table>";
		}else{
			print "<div class='alert alert-danger'>Não há categorias cadastradas</div>";
		}
	?>
</div>