<!DOCTYPE html>
<html>
<head>
	<title></title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>

<?php

session_start();
if (!isset($_SESSION['usuario'])) {
	header ('Location: index.php');
}

?> 


<?php


<div class="container" style="width: 400px; margin-top: 40px">
	<div style="text-align: right">
		<a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
	</div>
	<h4>Cadastro de Usuário</h4>
	<form action="insert_usuario.php" method="post">
		<div class="form-group">
			<label>Nome do Usuário</label>
			<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
		</div>

		<div class="form-group">
			<label>E-mail</label>
			<input type="text" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu E-mail">
		</div>

		<div class="form-group">
			<label>Senha do Usuário</label>
			<input id="textSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
		</div>
		<div class="form-group">
			<label>Repetir Senha</label>
			<input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
			<small>Precisa ser igual a senha digitada acima</small>
		</div>
		<div class="form-group">
			<label>Nível de Acesso</label>
			<select name="nivel_usuario" class="form-control">
					<option value="1">Administrador</option>
					<option value="2">Operador</option>
					<option value="3">Conferente</option>	
			</select>
		</div>

		<div style="text-align: right">
			<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
		</div>


	</form>



</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script>

function validaSenha (input){
	if (input.value != document.getElementById('textSenha').value) {
	input.setCustomValidity('Repita a senha corretamente');
	} else {
	input.setCustomValidity('');
}

}

</script>

</body>
</html>