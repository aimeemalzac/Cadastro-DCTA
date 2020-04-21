<?php

include 'conexao.php';

$id_usuario = $_GET['id_usuario'];

$deletar = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";

$fila = mysqli_query($conexao, $deletar);


header("Location: listar_usuario.php"); // redireciona novamente para a página de aprovação

?>