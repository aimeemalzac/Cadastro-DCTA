  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([

        ['Year', 'Analista em C&T', 'Assistentes em C&T', 'Auxiliar em C&T'],
          

        <?php
 
        include 'conexao.php';

        $sql = "SELECT YEAR(`demissdata`) as valorzim, sum(case when `cargo` = 'ANALISTA EM C&T' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end) AS 'Analista', sum(case when `cargo` = 'AUXILIAR EM C&T' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end) AS 'Auxiliar', sum(case when `cargo` = 'ASSISTENTE EM C&T' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end ) AS 'Assistente' FROM dados where `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' GROUP BY YEAR(`demissdata`)";


       $buscar = mysqli_query($conexao, $sql);

         while ($valor = mysqli_fetch_array($buscar)){
          $demissdata =  $valor ['valorzim'];
          $Analista = $valor ['Analista'];
          $Assistente = $valor ['Assistente'];
          $Auxiliar = $valor ['Auxiliar'];
         
  

         ?>

          ['<?php echo $demissdata ?>',<?php echo $Analista ?>, <?php echo $Assistente ?>, <?php echo $Auxiliar ?>],


        <?php } ?>
        ]);
       

        var options = {
          title: 'Servidores aposentados nos últimos 5 anos - Área Meio',
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
