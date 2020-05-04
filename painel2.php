  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Aposentadorias'],

          <?php

          include 'conexao.php';

          $sql ="SELECT `prevaposentadoria`, COUNT(*) AS total FROM dados WHERE `prevaposentadoria` < 2030  AND `prevaposentadoria` > 2020 GROUP BY `prevaposentadoria` ";

          $buscar = mysqli_query($conexao, $sql);

          while ($valor = mysqli_fetch_array($buscar)){
            
            $prevaposentadoria =  $valor ['prevaposentadoria'];
            $total = $valor ['total'];

          ?>

          ['<?php echo $prevaposentadoria ?>',<?php echo $total ?>],


         <?php } ?> 
        ]);

        var options = {
          title: '',
          //curveType: 'function',
          legend: { position: 'none' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Servidor', 'Sexo'],

         <?php

          include 'conexao.php';

          $sql ="SELECT `sexo`, COUNT(*) AS total FROM dados  WHERE `situacaofuncional` = 'Ativo' GROUP BY `sexo`";

          $buscar = mysqli_query($conexao, $sql);

          while ($valor = mysqli_fetch_array($buscar)){
            
            $sexo =  $valor ['sexo'];
            $total = $valor ['total'];

          ?>

          ['<?php echo $sexo ?>',<?php echo $total ?>],


         <?php } ?> 
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <div class = "container-fluid" style="margin-top: 40px">
      <div class="row">
       <div class="col-md-4">
       	 <h4>Servidores por Gênero</h4>
    		<div id="piechart" ></div>
      </div>
      <div class="col-md-8">
        	<h4>Projeções de Aposentadoria</h4>
            <div id="curve_chart"></div>
      </div>
    </div>
  </body>
</html>
