<!doctype html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <style>
      
      @media only screen and (max-width: 600px) {
        body{
          width: 300 px;
        }
      }
    </style>
    
</head>
  

<body>


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


  <nav class="navbar navbar-dark  bg-primary flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">DCTA</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="menu.php">Voltar</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar" style='background-color: #E9E9E9 '>
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="?pagina=relatorio">
              <span data-feather="home"></span>
              Relatórios <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=servidoresOm">
              <span data-feather="file"></span>
              Servidores por Organização Militar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=servidoresNivel">
              <span data-feather="shopping-cart"></span>
              Servidores por Nível de Escolaridade
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=servidoresAposentaveis">
              <span data-feather="users"></span>
              Servidores Aposentáveis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=servidoresAposentaveisFim">
              <span data-feather="users"></span>
              Servidores Aposentáveis - Área Fim 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=servidoresAposentaveisMeio">
              <span data-feather="users"></span>
              Servidores Aposentáveis - Área Meio
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="?pagina=servidoresAposentaveisFim5atras">
              <span data-feather="users"></span>
              Servidores Aposentados - Área Fim - Últimos 5 anos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=servidoresAposentaveisMeio5atras">
              <span data-feather="users"></span>
              Servidores Aposentáveis - Área Meio - Últimos 5 anos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=servidoresnivel5atras">
              <span data-feather="users"></span>
              Evasão na Carreira de C&T por nível nos últimos 5 anos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pagina=servidoresnivel5frente">
              <span data-feather="users"></span>
              Evasão na Carreira de C&T por nível nos próximos 5 anos
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Relatório</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            
          </div>
          
        </div>
      </div>

      <?php

      if(isset($_GET['pagina'])){

      	switch ($_GET['pagina']) {
          case 'relatorio':
            include 'painel.php';
            include 'painel2.php';
            break;

        
      		case 'servidoresOm':
      			echo '<h2>Servidores por Organização Militar</h2>';
      			include 'dash/graficos/terceiroGrafico.php';
      			break;

      		case 'servidoresNivel':
      			echo '<h2>Servidores por Nível de Escolaridade</h2>';
            include 'dash/graficos/segundoGrafico.php';
      			break;

      		case 'servidoresAposentaveis':
      			echo '<h2>Totalidade de aposentáveis por ano</h2>';
            include 'dash/graficos/primeiroGrafico.php';
      			break;

          case 'servidoresAposentaveisFim':
         
            include 'dash/graficos/quartoGrafico.php';
            break;

          case 'servidoresAposentaveisMeio':
           
            include 'dash/graficos/quintoGrafico.php';
            break;

          case 'servidoresAposentaveisFim5atras':
            
            include 'dash/graficos/setimoGrafico.php';
            break;


          case 'servidoresAposentaveisMeio5atras':
           
            include 'dash/graficos/sextoGrafico.php';
            break;

          case 'servidoresnivel5atras':
            echo '<h2>Evasão na Carreira de C&T por nível nos últimos 5 anos</h2>';
            include 'dash/graficos/oitavoGrafico.php';
            break;

          case 'servidoresnivel5frente':
            echo '<h2>Evasão na Carreira de C&T por nível nos próximos 5 anos</h2>';
            include 'dash/graficos/nonoGrafico.php';
            break;
      		
      		default:
      			echo "NENHUMA OPÇÃO ESCOLHIDA";
            include 'painel.php';
      			break;
      	}


      }


      ?>
     
      
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></body>
</html>
