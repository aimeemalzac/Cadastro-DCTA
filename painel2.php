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
          title: 'Projeções de Aposentadoria',
          //curveType: 'function',
          legend: { position: 'none' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class = "container-fluid" style="margin-top: 50px">
      <div class="row">
        <div class="col-md-8">
          <div id="curve_chart"></div>
      </div>
    </div>
  </div>

    <div id="curve_chart" ></div>
  </body>
</html>
