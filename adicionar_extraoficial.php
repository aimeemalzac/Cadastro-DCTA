 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Formulário de Cadastro</title>
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

<?php

session_start();
if (!isset($_SESSION['usuario'])) {
	header ('Location: index.php');
}

?> 




 	
 	<div class = "container" id="tamanhoContainer" style="margin-top: 40px">
 	<div style="text-align: center;">
 	<h4>Formulário de Cadastro</h4>
	</div>
	<form action="_inserir_servidor.php" method="post" style="margin-top: 20px;">
	  <div class="form-group">
	    <label> Siape </label>
	    <input type="number" class="form-control" name="siape"placeholder="Insira a matrícula SIAPE do servidor" required autocomplete="off">
	  </div>

	    <div class="form-group">
	    <label> Nome </label>
	    <input type="text" class="form-control" name="nome"placeholder="Insira o nome do servidor" required autocomplete="off">
	  </div>

	    <div class="form-group">
	    <label> OM </label>
	    <input type="text" class="form-control" name="om" placeholder="Insira a OM do servidor" required autocomplete="off">
	  </div>

	  <div class="form-group">
   		 <label for="exampleFormControlSelect1">Cargo</label>
   		 <select class="form-control" id="exampleFormControlSelect1" name="cargo" required autocomplete="off">
   		 	<option>-------------------</option>
     		<option>Auxiliar em C&T</option>
      		<option>Técnico</option>
      		<option>Tecnologista</option>
      		<option>Pesquisador</option>
      		<option>Analista em C&T</option>
      		<option>Assistente em C&T</option>
      		<option>Outro</option>
      	</select>
      </div>

      	<div class="form-group">
	    <label> Classe </label>
	    <input type="text" class="form-control" name="classe" placeholder="Insira o cargo do servidor" required autocomplete="off">
	  </div>

	  <div class="form-group">
	    <label> Padrão </label>
	    <input type="text" class="form-control" name="padrao"placeholder="Insira o cargo do servidor" required autocomplete="off">
	  </div>

	<div style="text-align: right;" style="margin-bottom: 100px">
	<a href="index.php" role="button" class="btn  btn-sm btn-primary">Voltar</a>
	<button type="submit" id="botao" class="btn  btn-sm">Cadastrar</button>
	</div>
<br>
<br>
	</div>
	</form>
	

 <script type="text/javascript" src="js/bootstrap.js"></script>
 </body>
 </html>
