<div class="col-lg-12">
	<h1>Editar Categoria</h1>
	<?php
		$sql = "SELECT * FROM categoria WHERE id_categoria=".$_REQUEST["id_categoria"];

		$res = $conn->query($sql) or die($conn->error);

		$row = $res->fetch_object();
	?>
	<form action="?page=salvar-categoria" method="POST">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_categoria" value="<?php print $row->id_categoria; ?>">
		<div class="mb-3">
			<label>Nome da Categoria</label>
			<input type="text" name="nome_categoria" class="form-control" value="<?php print $row->nome_categoria; ?>">
		</div>
		<?php 

			if(isset($_POST['acao'])){
				
				$arquivo = $_FILES['file'];

				$arquivo = explode('.',$arquivo['name']);

				if($arquivo[sizeof($arquivo)-1] != 'jpg'){
					die('Você não pode fazer upload deste arquivo');
				}else{
					echo 'Upload foi feito com sucesso!';
					move_uploaded_file($arquivo['tmp_name'], 'fotos/'.$arquivo['name']);
				}
		}
	?>
			<form action="" method="post" enctype="multipart/form-data">
			<label>Arquivo:</label>
			<input type="file" name="file"/>
		<br>	
		<br>
		<div class="mb-3">
			<button type="submit" class="btn btn-success">Enviar</button>
		</div>
	</form>
</div>