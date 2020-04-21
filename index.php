<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-sclable=no"/>
	<title>Tela de Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
	#tamanho{
		width: 350px;
		-webkit-box-shadow: 10px 10px 5px 2px rgba(189,178,189,1);
		-moz-box-shadow: 10px 10px 5px 2px rgba(189,178,189,1);
		box-shadow: 5px 5px 2px 1px rgba(189,178,189,1);
	}
	</style>

</head>
<body>

<div class="container" id="tamanho" style="margin-top:100px; border-radius: 15px; border: 2px solid #f3f3f3">
	<div style="padding: 10px">
	<center>
		<img src="imagem/logo_dcta.png" width="125px" altura="125px">
	</center>
	<form action="index1.php" method="post"> 
		<div class="form-group">
			<label>Usuário</label>
			<input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required=""></input>
		</div>
		<div class="form-group">
			<label>Senha</label>
			<input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required=""></input>
		</div>
	
<div style="text-align: right;">
	<button type ="submit" class="btn btn-primary">Entrar</button>
</div>
</form>
</div>
</div>

<div style="margin-top: 10px">
<center>
	<small>Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php">aqui</a></small>
</center>
</div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>