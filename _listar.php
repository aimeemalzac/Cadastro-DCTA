<!DOCTYPE html>
<html>
<head>
	<title>Listagem dos servidores</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/90ee13269e.js" crossorigin="anonymous"></script>

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
	

<div class= "container" style="margin-top: 40px">
	<div style="text-align: right">
	<a href="menu.php" role="button" class="btn  btn-sm btn-primary">Voltar</a>

</div>
	<h3>Lista de Servidores</h3>
<br>
	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Nome</th>
		      <th scope="col">Siape</th>
		      <th scope="col">OM</th>
		      <th scope="col">Ação</th>

		    </tr>
		  </thead>

    	<?php
	    	include 'conexao.php';

	    	$sql = "SELECT *, TIMESTAMPDIFF (YEAR, `datanascimento`, CURDATE()) AS idade FROM dados";
	    	$busca = mysqli_query($conexao, $sql);


			$nsql = "SELECT *, DATEDIFF(CURDATE(), `dataexercicio`) - `tempoafastado` AS tempodcta FROM dados";

			$b = mysqli_query($conexao, $nsql);
	    	



	    	while ($array = mysqli_fetch_array($busca)) {

	    		$id = $array ['id'];
	    		$nome = $array ['nome']; 
				$siape = $array ['siape'];
				$sexo = $array ['sexo'];
				$datanascimento = $array ['datanascimento'];
				//$idade = $array ['idade'];
				$cpf = $array ['cpf'];
				$rg = $array ['rg'];
				$estadocivil = $array ['estadocivil'];
				$pne = $array ['pne'];
				$endereco = $array ['endereco'];
				$email = $array ['email'];
				$situacaofuncional = $array ['situacaofuncional'];
				$om = $array ['om'];
				$carreira = $array ['carreira'];
				$cargo = $array ['cargo'];
				$classe = $array ['classe'];
				$padrao = $array ['padrao'];
				$nivel = $array ['nivel'];
				$jornada = $array ['jornada'];
				$codigovaga = $array ['codigovaga'];
				$pispasep = $array ['pispasep'];
				$dataposse = $array ['dataposse'];
				$dataexercicio = $array ['dataexercicio'];
				//$tempodcta = $array ['tempodcta'];
				$tempoexterno = $array ['tempoexterno'];
				$tempoafastado = $array ['tempoafastado'];
				$prevaposentadoria = $array ['prevaposentadoria'];
				$progressao = $array ['progressao'];
				$titulacao = $array ['titulacao'];
				$portariatitulacao = $array ['portariatitulacao'];
				$datatitulacao = $array ['datatitulacao'];
				$abono = $array['abono'];
				?>
			
			<?php {


			//mysql_data_seek( $, 0 );

			while ($array = mysqli_fetch_array($b)) {

	    		$id = $array ['id'];
	    		$nome = $array ['nome']; 
				$siape = $array ['siape'];
				$sexo = $array ['sexo'];
				$datanascimento = $array ['datanascimento'];
				//$idade = $array ['idade'];
				$cpf = $array ['cpf'];
				$rg = $array ['rg'];
				$estadocivil = $array ['estadocivil'];
				$pne = $array ['pne'];
				$endereco = $array ['endereco'];
				$email = $array ['email'];
				$situacaofuncional = $array ['situacaofuncional'];
				$om = $array ['om'];
				$carreira = $array ['carreira'];
				$cargo = $array ['cargo'];
				$classe = $array ['classe'];
				$padrao = $array ['padrao'];
				$nivel = $array ['nivel'];
				$jornada = $array ['jornada'];
				$codigovaga = $array ['codigovaga'];
				$pispasep = $array ['pispasep'];
				$dataposse = $array ['dataposse'];
				$dataexercicio = $array ['dataexercicio'];
				//$tempodcta = $array ['tempodcta'];
				$tempoexterno = $array ['tempoexterno'];
				$tempoafastado = $array ['tempoafastado'];
				$prevaposentadoria = $array ['prevaposentadoria'];
				$progressao = $array ['progressao'];
				$titulacao = $array ['titulacao'];
				$portariatitulacao = $array ['portariatitulacao'];
				$datatitulacao = $array ['datatitulacao'];
				$abono = $array['abono'];
				?>


	 		<tr>
		 		<td><?php echo $nome ?></td>

		 		<td><?php echo $siape ?></td>

		 		<td><?php echo $om ?></td>

		 		<td>

		 			<a class="btn btn-success btn-sm" href="visualizar.php?id=<?php echo $id ?>" role="button"><i class="far fa-address-card"></i>&nbsp;Visualizar</a>

		 			<?php

					if (($nivel_usuario == 1) || ($nivel_usuario == 2)) {
					?>

		 			<a class="btn btn-warning btn-sm" href="editar.php?id=<?php echo $id ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
		 					
		 			<a class="btn btn-danger btn-sm" href="deletar.php?id=<?php echo $id ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>

		 			<?php } ?>

		 			

		 		</td>
	 		</tr>

			<?php } ?>
			<?php } ?>
			<?php } ?>

	</table>


</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>