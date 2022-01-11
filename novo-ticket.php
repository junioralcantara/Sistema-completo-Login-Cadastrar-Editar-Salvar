<h1>Novo Ticket</h1>
<form action="?page=salvar-ticket" method="POST">
	<input type="hidden" name="acao" value="novo">
	<input type="hidden" name="id_usuario" value="<?php print $_SESSION["id"]; ?>">
	<div class="mb-3">
		<label>Categoria</label>
		<select name="categoria_id_categoria" class="form-control">
			<option>-=Escolha=-</option>	
		<?php
			$sql = "SELECT * FROM categoria";
			$res = $conn->query($sql) or die($conn->error);
			if($res->num_rows > 0){
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_categoria."'>";
					print $row->nome_categoria."</option>";
				}
			}
		?>
		</select>
	</div>
	<div class="mb-3">
		<label>Título</label>
		<input type="text" name="titulo_mensagem" class="form-control">
	</div>
	<div class="mb-3">
		<label>Mensagem</label>
		<textarea name="texto_mensagem" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>