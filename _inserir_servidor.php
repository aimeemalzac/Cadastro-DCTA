<?php

include 'conexao.php';

$nome = $_POST['nome']; 
$siape = $_POST['siape'];
$sexo = $_POST['sexo'];
$datanascimento = $_POST['datanascimento'];
//$idade = $_POST['idade'];
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



$sql = "INSERT INTO `dados`(`nome`, `siape`, `sexo`, `datanascimento`, `cpf`, `rg`, `estadocivil`, `pne`, `endereco`, `email`, `situacaofuncional`, `om`, `carreira`, `cargo`, `classe`, `padrao`, `nivel`, `jornada`, `codigovaga`, `pispasep`, `dataposse`, `dataexercicio`,  `tempoexterno`, `tempoafastado`, `prevaposentadoria`, `progressao`, `titulacao`, `portariatitulacao`, `datatitulacao`) VALUES ('$nome', $siape, '$sexo', '$datanascimento', $cpf, $rg, '$estadocivil', '$pne', '$endereco', '$email', '$situacaofuncional', '$om', '$carreira', '$cargo', '$classe', '$padrao', '$nivel', '$jornada', $codigovaga, $pispasep, '$dataposse', '$dataexercicio', $tempoexterno, $tempoafastado, $prevaposentadoria, '$progressao', '$titulacao', '$portariatitulacao', '$datatitulacao')";

$inserir = mysqli_query($conexao, $sql);

?>


<link rel="stylesheet" href ="css/bootstrap.css">
<div class="container" style="width: 500 px; margin-top: 20px">
<center>
<h4>Servidor adicionado com sucesso!</h4>
</center>

<center>
<a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
</center>
</div>