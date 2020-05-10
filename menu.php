<?php

include 'conexao.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>


<?php

session_start();

$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
	header ('Location: index.php');
}



include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario ='$usuario' and status = 'Ativo'";

$buscar = mysqli_query($conexao, $sql);

$array = mysqli_fetch_array($buscar);

$nivel_usuario = $array['nivel_usuario'];

?> 


	<center>
		<div class="logo"><img style= "width:100px"; style="margin-left: 100px" src = "https://upload.wikimedia.org/wikipedia/pt/4/49/LogotipoDCTA.jpg"></div>
	</center>

	<center>
		<div class = "container" style="margin-top: 100px">

			<h5 class="card-title">Bem-vindo ao Cadastro dos Servidores do DCTA</h5>
			<br>	
			<form action="/curso/pesquisar.php">
				<input class="form-control" type="text" id="siape" name="siape" placeholder="Digite a matrícula siape do servidor"><br>
				<input class="btn btn-primary" type="submit" value="Pesquisar">
			</form> 
		</div>
	</div>
</div>
</div>
</div>
</center>
		<div class = "container" style="margin-top: 100px">
			<div class="row">
				
				<?php
				if (($nivel_usuario == 1) || ($nivel_usuario == 2)) {
				?>

				<div class="col-sm-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Adicionar novo Servidor</h5>
							<p class="card-text">Clique aqui para adicionar um novo servidor na sua base de dados.</p>
							<a href="adicionar.php" class="btn btn-primary">Adicionar</a>
						</div>
					</div>
				</div>

			<?php } ?>

		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Relação de Servidores</h5>
					<p class="card-text">Clique aqui para visualizar a relação de servidores do DCTA</p>
					<a href="_listar.php" class="btn btn-primary">Listar</a>
				</div>
			</div>
		</div>

		<?php
		if ($nivel_usuario == 1)  {
		?>
		

		<div class="col-sm-6" style="margin-top: 20px">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Aprovar Usuários</h5>
					<p class="card-text">Aprovar usuários cadastrados</p>
					<a href="aprovar_usuario.php" class="btn btn-primary">Aprovar usuários</a>

				</div>
			</div>
		</div>


		<div class="col-sm-6" style="margin-top: 20px">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Relatórios</h5>
					<p class="card-text">Relatórios Gerenciais</p>
					<a href="http://localhost/curso/dashboard.php?pagina=relatorio" class="btn btn-primary">Visualizar Relatórios</a>

				</div>
			</div>
		</div>







		<?php } ?>		

				<?php
				if ($nivel_usuario == 1) {
				?>
		
	<div class="col-sm-6" style="margin-top: 20px">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Listar Usuários do Sistema</h5>
							<p class="card-text">Opção para listar usuários do sistema </p>
							<a href="listar_usuario.php" class="btn btn-primary">Listar</a>

						</div>

					</div>
				</div>

<?php } ?>


<div class= "container" style="margin-top: 40px">
	<div style="text-align: right" >
	<a href="index.php" role="button" class="btn   btn-primary">Sair</a>
</div>

			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



	</body>
	</html>





