<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/90ee13269e.js" crossorigin="anonymous"></script>

</head>

<body>


<?php

session_start();
if (!isset($_SESSION['usuario'])) {
	header ('Location: index.php');
}

?> 





<?php

include 'conexao.php';

$id = $_GET['id'];
$nivel_usuario = $_GET['nivel_usuario'];

if ($nivel_usuario == 1) {

	$update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
	echo "ADMINISTRADOR APROVADO";
}

if ($nivel_usuario == 2) {

	$update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
	echo "OPERADOR APROVADO";
}

if ($nivel_usuario == 3) {

	$update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id";
	$atualizacao = mysqli_query($conexao, $update);
	echo "CONFERENTE APROVADO";

}
header("location: aprovar_usuario.php"); // redireciona novamente para a página de aprovação
?>

<div class= "container" >
	<div style="text-align: right">
	<a href="aprovar_usuario.php" role="button" class="btn  btn-sm btn-primary">Voltar</a>

</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>