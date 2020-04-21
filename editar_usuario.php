<?php

session_start();
if (!isset($_SESSION['usuario'])) {
  header ('Location: index.php');
}

?> 



<?php

include 'conexao.php';

$id_usuario = $_GET['id_usuario'];


?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 	<link rel="stylesheet" href ="css/bootstrap.css">

 	<style type="text/css">
 		
 		#tamanhoContainer{
 			width: 500px;
 		}

 		#botao {
 			background-color: #F72378; /*cor de fundo*/
 			color: #ffffff; /*cor da letra*/
 			/*font-weight: bold;*/
 		}

 	</style>

 <body> 
 <div class="container" style="margin-top: 40px;">
  <div class="row">
    <div class="col-sm">
	  <form action="atualizar_usuario.php" method="post" style="margin-top: 20px;">

		<?php

		$sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id_usuario";
		$buscar = mysqli_query($conexao, $sql);
		while ($array = mysqli_fetch_array($buscar)) {

      
        $id_usuario = $array ['id_usuario'];
        $nome_usuario = $array ['nome_usuario']; 
        $mail_usuario = $array ['mail_usuario'];
        $nivel_usuario = $array ['nivel_usuario'];
        $status = $array ['status'];
				

		?>

<div class="container" style="width: 400px; margin-top: 40px">

  <div style="text-align: right">
    <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
  </div>

  <h4>Cadastro de Usuário</h4>

  <form action="atualizar_usuario.php" method="post">
    <div class="form-group">
      <label>Nome do Usuário</label>
      <input type="text" name="nome_usuario" class="form-control" value="<?php echo $nome_usuario ?>">
      <input type="number" class="form-control" name="id_usuario" value="<?php echo $id_usuario ?>" style="display: none">
    </div>

    <div class="form-group">
      <label>E-mail</label>
      <input type="text" name="mail_usuario" class="form-control" value="<?php echo $mail_usuario ?>">
    </div>

    <div class="form-group">
      <label>Nivel</label>
      <input type="number" name="nivel_usuario" class="form-control" value="<?php echo $nivel_usuario ?>">
    </div>

    <div class="form-group">
      <label>Status</label>
      <input type="text" name="status" class="form-control" value="<?php echo $status ?>">
    </div>
  

    <div style="text-align: right">
      <button type="submit" class="btn btn-sm btn-success">Atualizar</button>
    </div>

  </form>

</div>


    </div>
  	</div>
		
  <?php } ?>

	</form>
  </div>

 <script type="text/javascript" src="js/bootstrap.js"></script>
 </body>
 </html>

