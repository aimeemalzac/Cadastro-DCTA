<?php

session_start();
if (!isset($_SESSION['usuario'])) {
	header ('Location: index.php');
}

?> 


<?php

include 'conexao.php';


$id = $_POST['id']; 
$nome = $_POST['nome']; 
$siape = $_POST['siape'];
$sexo = $_POST['sexo'];
$datanascimento = $_POST['datanascimento'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$estadocivil = $_POST['estadocivil'];
$pne = $_POST['pne'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$situacaofuncional = $_POST['situacaofuncional'];
$om = $_POST['om'];
$carreira = $_POST['carreira'];
$cargo = $_POST['cargo'];
$classe = $_POST['classe'];
$padrao = $_POST['padrao'];
$nivel = $_POST['nivel'];
$jornada = $_POST['jornada'];
$codigovaga = $_POST['codigovaga'];
$pispasep = $_POST['pispasep'];
$dataposse = $_POST['dataposse'];
$dataexercicio = $_POST['dataexercicio'];
//$tempodcta = $_POST['tempodcta'];
$tempoexterno = $_POST['tempoexterno'];
$tempoafastado = $_POST['tempoafastado'];
$prevaposentadoria = $_POST['prevaposentadoria'];
$progressao = $_POST['progressao'];
$titulacao = $_POST['titulacao'];
$portariatitulacao = $_POST['portariatitulacao'];
$datatitulacao = $_POST['datatitulacao'];



$sql = "UPDATE `dados` SET  `nome` = '$nome',`siape`= $siape, `sexo`='$sexo', `datanascimento`='$datanascimento', `cpf`=$cpf, `rg`=$rg, `estadocivil`='$estadocivil', `pne`='$pne', `endereco`='$endereco', `email`='$email', `situacaofuncional`='$situacaofuncional', `om`='$om', `carreira`='$carreira', `cargo`='$cargo', `classe`='$classe', `padrao`='$padrao', `nivel`='$nivel', `jornada`='$jornada', `codigovaga`=$codigovaga, `pispasep`=$pispasep, `dataposse`='$dataposse', `dataexercicio`='$dataexercicio', `tempoexterno`=$tempoexterno, `tempoafastado`=$tempoafastado, `prevaposentadoria`=$prevaposentadoria, `progressao`='$progressao', `titulacao`='$titulacao', `portariatitulacao`='$portariatitulacao', `datatitulacao`='$datatitulacao' WHERE id = $id ";


$atualizar = mysqli_query($conexao, $sql);


?>


<div class= "container"  style="width: 400px">
<link rel="stylesheet" href ="css/bootstrap.css">
<center>
	<h3><?php if ($atualizar){echo "Atualizado com sucesso";}else{echo "erro";} ?>  </h3>	
	<div style="margin-top: 10px">
	<a href="_listar.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>
