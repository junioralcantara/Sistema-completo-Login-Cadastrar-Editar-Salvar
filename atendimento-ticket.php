<div class="col-lg-12">
	<?php
		$sql = "SELECT * FROM mensagem m
				INNER JOIN usuario u
				ON u.id_usuario = m.usuario_id_usuario
				WHERE id_mensagem = ".$_REQUEST["id_mensagem"];

		$res = $conn->query($sql) or die($conn->error);

		$row = $res->fetch_object();

		print "<div class='card'>";
		print "<div class='card-body'>";
		print "<div class='card-title'><h4>".$row->titulo_mensagem."</h4></div>";
		print "<div class='card-text'>".$row->texto_mensagem."</div>";
		print "<div class='card-text'><small class='text-muted'>".$row->nome_usuario."</small></div>";
		print "</div></div>";
	?>
</div>
<hr class="my-5">
<?php
	$sql_1 = "SELECT * FROM atendimento a
			  INNER JOIN usuario u
			  ON u.id_usuario = a.usuario_id_usuario
			  WHERE mensagem_id_mensagem = ".$_REQUEST["id_mensagem"];

	$res_1 = $conn->query($sql_1) or die($conn->error);

	if($res_1->num_rows > 0){
		while($row_1 = $res_1->fetch_object()){
			print "<div class='card'>";
			print "<div class='card-body'>";
			print "<div class='card-title'><h4>".$row_1->data_atendimento." ".$row_1->hora_atendimento."</h4></div>";
			print "<div class='card-text'>".$row_1->texto_atendimento."</div>";
			print "<div class='card-text'><small class='text-muted'>".$row_1->nome_usuario."</small></div>";
			print "</div></div>";
		}
	}else{
		print "<div class='alert alert-danger'>Nenhuma resposta neste atendimento</div>";
	}
?>
<hr class="my-5">
<div class="col-lg-12">
	<form action="?page=salvar-ticket" method="POST">
		<input type="hidden" name="acao" value="responder">
		<input type="hidden" name="id_mensagem" value="<?php print $row->id_mensagem; ?>">
		<input type="hidden" name="id_usuario" value="<?php print $_SESSION["id"]; ?>">
		<div class="mb-3">
			<label>Resposta</label>
			<textarea name="texto_atendimento" class="form-control"></textarea>
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>
	</form>
</div>