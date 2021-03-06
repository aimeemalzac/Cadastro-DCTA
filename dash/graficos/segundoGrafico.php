<html>
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          
          ['nivel', 'total', {role: 'style'}],
         
          <?php

          include 'conexao.php';

          $sql = "SELECT `nivel` , COUNT(*) AS total FROM dados WHERE `situacaofuncional` = 'Ativo' GROUP BY `nivel`";

          $buscar = mysqli_query($conexao, $sql);

          while ($valor = mysqli_fetch_array($buscar)){
            $nivel =  $valor ['nivel'];
            $total = $valor ['total'];

          ?>

          ['<?php echo $nivel ?>',<?php echo $total ?>, 'stroke-color: #0000CD; stroke-width: 4; fill-color: #191970'],

          <?php } ?>
        ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "NI = nível intermediário, NA = nível auxiliar, NS = nível superior",
        width: 900,
        height: 400,
        bar: {groupWidth: "40%"},
        legend: { position: "bottom" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("graficoColuna"));
      chart.draw(view, options);
  }
  </script>
  </head>
  <body>
    <div id="graficoColuna" style="height: 200px"></div>
  </body>
</html>
