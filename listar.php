<!DOCTYPE html>
<html>
<head>
	<title>Listagem dos servidores</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/90ee13269e.js" crossorigin="anonymous"></script>

</head>

<body>

<div class= "container" style="margin-top: 40px">
	<div style="text-align: right">
	<a href="index.php" role="button" class="btn  btn-sm btn-primary">Voltar</a>

</div>
	<h3>Lista de Servidores</h3>
<br>
	<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Nome</th>
		      <th scope="col">Siape</th>
		      <th scope="col">Sexo</th>
		      <th scope="col">Data de Nascimento</th>
		      <th scope="col">Idade</th>
		      <th scope="col">CPF</th>
		      <th scope="col">RG</th>
		      <th scope="col">Estado Civil</th>
		      <th scope="col">PNE</th>
		      <th scope="col">Endereço</th>
		      <th scope="col">E-mail</th>
		      <th scope="col">Situação Funcional</th>
		      <th scope="col">OM</th>
		      <th scope="col">Carreira</th>
		      <th scope="col">Cargo</th>
		      <th scope="col">Classe</th>
		      <th scope="col">Padrão</th>
		      <th scope="col">Nível</th>
		      <th scope="col">Jornada</th>
		      <th scope="col">Código de Vaga</th>
		      <th scope="col">Pis/Pasep</th>
		      <th scope="col">Data de Posse</th>
		      <th scope="col">Data de Exercício</th>
		      <th scope="col">Tempo no DCTA</th>
		      <th scope="col">Tempo Externo</th>
		      <th scope="col">Tempo Afastado</th>
		      <th scope="col">Previsão de Aposentadoria</th>
		      <th scope="col">Progressão</th>
		      <th scope="col">Titulação</th>
		      <th scope="col">Portaria da Titulação</th>
		      <th scope="col">Data da Titulação</th>
		      <th scope="col">Ação</th>

		    </tr>
		  </thead>

    	<?php
	    	include 'conexao.php';
	    	$sql = "SELECT * FROM dados";
	    	$busca = mysqli_query($conexao, $sql);


	    	while ($array = mysqli_fetch_array($busca)) {

	    		$id = $array ['id'];
	    		$nome = $array ['nome']; 
				$siape = $array ['siape'];
				$sexo = $array ['sexo'];
				$datanascimento = $array ['datanascimento'];
				$idade = $array ['idade'];
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
				$tempodcta = $array ['tempodcta'];
				$tempoexterno = $array ['tempoexterno'];
				$tempoafastado = $array ['tempoafastado'];
				$prevaposentadoria = $array ['prevaposentadoria'];
				$progressao = $array ['progressao'];
				$titulacao = $array ['titulacao'];
				$portariatitulacao = $array ['portariatitulacao'];
				$datatitulacao = $array ['datatitulacao'];
				?>
	 		<tr>
		 		<td><?php echo $nome ?></td>

		 		<td><?php echo $siape ?></td>

		 		<td><?php echo $sexo ?></td>

		 		<td><?php echo $datanascimento ?></td>

		 		<td><?php echo $idade ?></td>

		 		<td><?php echo $cpf ?></td>

		 		<td><?php echo $rg ?></td>

		 		<td><?php echo $estadocivil ?></td>

		 		<td><?php echo $pne ?></td>

		 		<td><?php echo $endereco ?></td>

		 		<td><?php echo $email ?></td>

		 		<td><?php echo $situacaofuncional ?></td>

		 		<td><?php echo $om ?></td>

		 		<td><?php echo $carreira ?></td>

		 		<td><?php echo $cargo ?></td>

		 		<td><?php echo $classe ?></td>

		 		<td><?php echo $padrao ?></td>

		 		<td><?php echo $nivel ?></td>

		 		<td><?php echo $jornada ?></td>

		 		<td><?php echo $codigovaga ?></td>

		 		<td><?php echo $pispasep ?></td>

		 		<td><?php echo $dataposse ?></td>

		 		<td><?php echo $dataexercicio ?></td>

		 		<td><?php echo $tempodcta ?></td>

		 		<td><?php echo $tempoexterno ?></td>

		 		<td><?php echo $tempoafastado ?></td>

		 		<td><?php echo $prevaposentadoria ?></td>

		 		<td><?php echo $progressao ?></td>

		 		<td><?php echo $titulacao ?></td>

		 		<td><?php echo $portariatitulacao ?></td>

		 		<td><?php echo $datatitulacao ?></td>


		 		<td><a class="btn btn-warning btn-sm" href="editar.php?id=<?php echo $id ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a></td>

		 		<td><a class="btn btn-danger btn-sm" href="deletar.php?id=<?php echo $id ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>


	 		</tr>

		<?php } ?>

	</table>


</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>