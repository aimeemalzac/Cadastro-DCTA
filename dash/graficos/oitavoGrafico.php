<html>
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          
          ['Ano', 'Superior','Intermediario','Auxiliar'],
         
          <?php

          include 'conexao.php';

          $sql = "SELECT YEAR(`demissdata`) as valor, sum(case when `nivel` = 'NS' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end) AS 'Superior', sum(case when `nivel` = 'NI' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end) AS 'Intermediario', sum(case when `nivel` = 'NA' AND `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' then 1 else 0 end ) AS 'Auxiliar'FROM dados where `demissdata` >= '2015-01-01' AND `demissdata` <= '2019-12-31' GROUP BY YEAR(`demissdata`)";

          $buscar = mysqli_query($conexao, $sql);

          while ($valor = mysqli_fetch_array($buscar)){
            $demissdata =  $valor ['valor'];
            $Superior = $valor ['Superior'];
            $Intermediario = $valor ['Intermediario'];
            $Auxiliar = $valor ['Auxiliar'];



          ?>

            ['<?php echo $demissdata ?>',<?php echo $Superior ?>,<?php echo $Intermediario ?>,<?php echo $Auxiliar ?>],
        
          
          <?php } ?>
        ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1, 2,
                       { calc: "stringify",
                         //sourceColumn: 2,
                         type: "string",
                         role: "annotation" },
                       3]);

      var options = {
        title: "",
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
