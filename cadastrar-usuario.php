<div class="col-lg-12">
	<h1>Cadastrar Usuário</h1>
	<form action="?page=salvar-usuario" method="POST">
		<input type="hidden" name="acao" value="cadastrar">
		<div class="mb-3">
			<label>Nome</label>
			<input type="text" name="nome_usuario" class="form-control">
		</div>
		<div class="mb-3">
			<label>E-mail</label>
			<input type="email" name="email_usuario" class="form-control">
		</div>
		<div class="mb-3">
			<label>Senha</label>
			<input type="password" name="senha_usuario" class="form-control">
		</div>
		<div class="mb-3">
			<label>Tipo de Acesso</label>
			<select name="tipo_usuario" class="form-control">
				<option>-=Escolha=-</option>
				<option value="1">Administrador</option>
				<option value="2">Usuário Comum</option>
			</select>
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-success">Enviar</button>
		</div>
	</form>
</div>