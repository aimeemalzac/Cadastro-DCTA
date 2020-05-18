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

        $sql = "SELECT YEAR(`demissdata`) as valor, sum(case when `cargo` = 'PESQUISADOR' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end) AS 'Pesquisador', sum(case when `cargo` = 'TECNOLOGISTA' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end) AS 'Tecnologista', sum(case when `cargo` = 'TECNICO' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end ) AS 'Tecnico',  sum(case when `cargo` = 'AUXILIAR TECNICO' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end ) AS 'Auxiliartecnico' FROM dados where `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' GROUP BY YEAR(`demissdata`)";


   $buscar = mysqli_query($conexao, $sql);

         while ($valor = mysqli_fetch_array($buscar)){
          $demissdata =  $valor ['valor'];
          $Tecnico = $valor ['Tecnico'];
          $Tecnologista = $valor ['Tecnologista'];
          $Pesquisador = $valor ['Pesquisador'];
          $Auxiliartecnico = $valor ['Auxiliartecnico'];
  
         

         ?>

             ['<?php echo $demissdata?>',<?php echo $Pesquisador ?>, <?php echo $Tecnologista ?>, <?php echo $Tecnico ?>, <?php echo $Auxiliartecnico ?>],


        <?php } ?>
        ]);
       

        var options = {
          title: 'Servidores aposentados nos últimos 5 anos - Área Fim',
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
 