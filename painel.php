<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/90ee13269e.js" crossorigin="anonymous"></script>

	<title></title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
 				 <div class="card-header">Total de servidores Ativos no DCTA</div>
				  <div class="card-body">
 				   <h5 class="card-title" style="text-align: center; font-size: 50px"> 
 				   <?php

				    	include 'conexao.php';

				    	$sql = "SELECT `situacaofuncional`, COUNT(*) AS total FROM dados WHERE `situacaofuncional` = 'Ativo' GROUP BY `situacaofuncional`";
				    	$consulta = mysqli_query($conexao, $sql);
				    	$dados = mysqli_fetch_array($consulta);
				    	echo $dados ['total'];

				    	?>
   					</h5>
 				 </div>
		    	</div>
			</div>

			<div class="col-md-4">
				<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
 				 <div class="card-header">Total de servidores Aposentados</div>
				  <div class="card-body">
 				   <h5 class="card-title" style="text-align: center; font-size: 50px">
 				   	<?php

				    	include 'conexao.php';

				    	$sql = "SELECT `situacaofuncional`, COUNT(*) AS total FROM dados WHERE `situacaofuncional` = 'Aposentado' GROUP BY `situacaofuncional`";
				    	 $consulta = mysqli_query($conexao, $sql);
				    	 $dados = mysqli_fetch_array($consulta);
				    	 echo $dados ['total'];


				    	?>
 				   </h5>
   					 
 				 </div>
		    	</div>
			</div>

			<div class="col-md-4">
				<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
				  <div class="card-header">Total de Servidores Cedidos</div>
				 	 <div class="card-body">
				    	<h5 class="card-title" style="text-align: center; font-size: 50px">
				    	 <?php

				    	include 'conexao.php';

				    	$sql = "SELECT `situacaofuncional`, COUNT(*) AS total FROM dados WHERE `situacaofuncional` != 'Aposentado' AND `situacaofuncional` != 'Ativo' GROUP BY `situacaofuncional`";
				    	 $consulta = mysqli_query($conexao, $sql);
				    	 $dados = mysqli_fetch_array($consulta);
				    	 echo $dados ['total'];


				    	?>
 				   </h5>	
				    	
  					</div>
				</div>
			</div>

		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>