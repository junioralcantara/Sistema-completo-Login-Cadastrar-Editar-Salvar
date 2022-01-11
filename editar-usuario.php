<div class="col-lg-12">
	<h1>Editar Usuário</h1>
	<?php
		$sql = "SELECT * FROM usuario WHERE id_usuario = ".$_REQUEST["id_usuario"];

		$res = $conn->query($sql) or die($conn->error);

		$row = $res->fetch_object();
	?>
	<form action="?page=salvar-usuario" method="POST">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">
		<div class="mb-3">
			<label>Nome</label>
			<input type="text" name="nome_usuario" value="<?php print $row->nome_usuario; ?>" class="form-control">
		</div>
		<div class="mb-3">
			<label>E-mail</label>
			<input type="email" name="email_usuario" value="<?php print $row->email_usuario; ?>" class="form-control">
		</div>
		<div class="mb-3">
			<label>Tipo de Acesso</label>
			<select name="tipo_usuario" class="form-control">
				<option>-=Escolha=-</option>
				<option value="1" <?php print ($row->tipo_usuario=="1"?"selected":""); ?> >Administrador</option>
				<option value="2"<?php print ($row->tipo_usuario=="2"?"selected":""); ?> >Usuário Comum</option>
			</select>
		</div>
		<div class="mb-3">
			<label>Status</label>
			<select name="status_usuario" class="form-control">
				<option>-=Escolha=-</option>
				<option value="1" <?php print ($row->status_usuario=="1"?"selected":""); ?> >Ativo</option>
				<option value="2"<?php print ($row->status_usuario=="2"?"selected":""); ?> >Inativo</option>
			</select>
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-success">Enviar</button>
		</div>
	</form>
</div>