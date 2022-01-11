<div class="col-lg-12">
	<h1>Cadastrar Categoria</h1>
	<form action="?page=salvar-categoria" method="POST">
		<input type="hidden" name="acao" value="cadastrar">
		<div class="mb-3">
			<label>Nome da Categoria</label>
			<input type="text" name="nome_categoria" class="form-control">
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