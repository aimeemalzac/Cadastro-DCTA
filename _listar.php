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


<!DOCTYPE html>
<html>

<head>   
<meta charset="utf-8">   

<title></title>  

<meta name="description" content="Bootstrap."> 

<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">  

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>

<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/90ee13269e.js" crossorigin="anonymous"></script>

</head> 

<body>


	

<div class= "container" style="margin-top: 40px">
	<div style="text-align: right">
	<a href="menu.php" role="button" class="btn  btn-sm btn-primary">Voltar</a>

</div>
	<h3>Lista de Servidores</h3>
<br>
	<table id ="dados" class="table">
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

<script>
$(document).ready(function(){
    $('#dados').dataTable( {
		"language": {
    "sEmptyTable": "Nenhum registro encontrado",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_ Resultados por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Pesquisar",
    "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    },
    "select": {
        "rows": {
            "_": "Selecionado %d linhas",
            "0": "Nenhuma linha selecionada",
            "1": "Selecionado 1 linha"
        }
    },
    "buttons": {
        "copy": "Copiar para a área de transferência",
        "copyTitle": "Cópia bem sucedida",
        "copySuccess": {
            "1": "Uma linha copiada com sucesso",
            "_": "%d linhas copiadas com sucesso"
        }
    }
}

		});
});
</script>


<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

</body>

</html>