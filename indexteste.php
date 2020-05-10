<?php

include 'conexao.php';


$sql = "SELECT * FROM dados WHERE `cargo` = 'ANALISTA EM C&T' AND `cargo` = 'TECNOLOGISTA'";

$buscar = mysqli_query($conexao, $sql);

$situacaofuncional ='';
$cargo ='';
$prevaposentadoria ='';


while ($dados = mysqli_fetch_array($buscar)){
			
			$situacaofuncional = $situacaofuncional . '"' .$dados['situacaofuncional'] . '",';
			$cargo = $cargo . '"' .$dados['cargo'] . '",';
			$prevaposentadoria = $prevaposentadoria . '"' .$dados['prevaposentadoria'] . '",';

	        $situacaofuncional = trim($situacaofuncional);
			$cargo = trim($cargo);
			$prevaposentadoria = trim($prevaposentadoria);
			
			}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Grafico Linha</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>

</head>
<body>


<div class="container" style="background-color: #F3F3F3">
<canvas id="Linha"></canvas>
</div>

<script type="text/javascript">



	var ctx = document.getElementById('Linha').getContext('2d');

	var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {

    	labels: [<?php echo $prevaposentadoria ?>],
    	datasets: 
    	[{
    		label: 'cargo',
    		data:  [<?php echo $cargo ?>],
    		backgroundColor: 'transparent',
    		borderColor: 'rgba(255,99,132)',
    		borderWidth: 3
    	
    	}]



    },
   
    options: { 
        scales: {scales:{yAxes: [{beginAtZero : false}], xAxes : [{autoskip: true, maxTicketsLimit: 20 }]}},
        tooltips: {mode: 'index'},
        legend: {display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
    }
});


</script>
</body>
</html>