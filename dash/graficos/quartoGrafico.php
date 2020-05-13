  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([

        ['Year', 'Pesquisador', 'Tecnologista', 'Técnico', 'Auxiliar Técnico'],
          

        <?php
 
        include 'conexao.php';

        $sql = "SELECT `prevaposentadoria`, sum(case when `cargo` = 'TECNICO' AND `prevaposentadoria` > 2019 AND `prevaposentadoria` < 2025 then 1 else 0 end) AS 'Tecnico', sum(case when `cargo` = 'AUXILIAR TECNICO' AND `prevaposentadoria` > 2019 AND `prevaposentadoria` < 2025 then 1 else 0 end) AS 'Auxiliartecnico', sum(case when `cargo` = 'TECNOLOGISTA' AND `prevaposentadoria` > 2019 AND `prevaposentadoria` < 2025 then 1 else 0 end ) AS 'Tecnologista', sum(case when `cargo` = 'PESQUISADOR' AND `prevaposentadoria` > 2019 AND `prevaposentadoria` < 2025 then 1 else 0 end) AS 'Pesquisador' FROM dados where `prevaposentadoria` < 2025 AND `prevaposentadoria` > 2019 GROUP BY `prevaposentadoria`";


       $buscar = mysqli_query($conexao, $sql);

         while ($valor = mysqli_fetch_array($buscar)){
          $prevaposentadoria =  $valor ['prevaposentadoria'];
          $Tecnico = $valor ['Tecnico'];
          $Tecnologista = $valor ['Tecnologista'];
          $Pesquisador = $valor ['Pesquisador'];
          $Auxiliartecnico = $valor ['Auxiliartecnico'];
  

         ?>

          ['<?php echo $prevaposentadoria ?>',<?php echo $Pesquisador ?>, <?php echo $Tecnologista ?>, <?php echo $Tecnico ?>, <?php echo $Auxiliartecnico ?>],


        <?php } ?>
        ]);
       

        var options = {
          title: 'Servidores aposentáveis - Área Fim',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
