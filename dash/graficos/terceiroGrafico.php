  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          
          ['om', 'total'],
         
          <?php

          include 'conexao.php';

          $sql = "SELECT `om` , COUNT(*) AS total FROM dados WHERE `situacaofuncional` = 'Ativo' GROUP BY `om`";

          $buscar = mysqli_query($conexao, $sql);

          while ($valor = mysqli_fetch_array($buscar)){
            $om =  $valor ['om'];
            $total = $valor ['total'];

          ?>

          ['<?php echo $om ?>',<?php echo $total ?>],

          <?php } ?>
        ]);

        var options = {
          //title: 'Servidores Ativos por OM',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 600px;"></div>
  </body>
</html>