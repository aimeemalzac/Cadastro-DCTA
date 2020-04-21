<?php

session_start();
if (!isset($_SESSION['usuario'])) {
	header ('Location: index.php');
}

?> 


<?php


include 'conexao.php';


$id_usuario = $_POST['id_usuario']; 
$nome_usuario = $_POST['nome_usuario']; 
$mail_usuario = $_POST['mail_usuario'];
$nivel_usuario = $_POST['nivel_usuario'];
$status = $_POST['status'];


$sql = "UPDATE `usuarios` SET `nome_usuario` = '$nome_usuario',`mail_usuario`= '$mail_usuario', `nivel_usuario` = $nivel_usuario , `status` = '$status' WHERE id_usuario = $id_usuario ";


$atualizar = mysqli_query($conexao, $sql);


?>

<div class= "container"  style="width: 400px">
<link rel="stylesheet" href ="css/bootstrap.css">
<center>
	<h3><?php if ($atualizar){echo "Atualizado com sucesso";}else{echo "erro";} ?>  </h3>	
	<div style="margin-top: 10px">
	<a href="listar_usuario.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>