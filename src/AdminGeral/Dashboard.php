<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>
<?php include ("../Prontuarios/config.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Dashboard </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/dashboard.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <?php

      $x = 0;
      $y = 0;
      $z = 0;

        $result_desconto_ava = "SELECT * FROM convenios";
        $resultado_desconto_ava = mysqli_query($con, $result_desconto_ava);
          while($row_desconto_ava = mysqli_fetch_assoc($resultado_desconto_ava)){
            if($row_desconto_ava['desconto'] == "10"){
                $x++;
            } else  if($row_desconto_ava['desconto'] == "30"){
                $y++;
            } if($row_desconto_ava['desconto'] == "60"){
                $z++;
          }
        }
    ?>

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Desconto', 'por Convênio'],
          ['10%', <?=$x?>], 
          ['30%', <?=$y?>], 
          ['60%', <?=$z?>] 
        ]);

        var options = {
          colors: ['#2BD47D', '#66b0ff', '#ec8f6e', '#f3b49f', '#f6c7b6']
        };
          
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <?php

      $a = 0;
      $b = 0;
      $c = 0;

        $result_desconto_ava = "SELECT * FROM financeiro";
        $resultado_desconto_ava = mysqli_query($con, $result_desconto_ava);
          while($row_desconto_ava = mysqli_fetch_assoc($resultado_desconto_ava)){
            if($row_desconto_ava['tipo_pagamento'] == "Entrada"){
                $a++;
            } else  if($row_desconto_ava['tipo_pagamento'] == "Saída"){
                $b++;
            }
        }
    ?>
    
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Desconto', 'por Convênio'],
          ['Entrada', <?=$a?>], 
          ['Saída', <?=$b?>]
        ]);

        var options = {
          colors: ['#2BD47D', '#66b0ff', '#ec8f6e', '#f3b49f', '#f6c7b6']
        };
          
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>

    </head>
    <body>

<!--========== CONTENTS ==========-->
        <main>
 
  <section class="home-section">
   
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic"> Pacientes </div>
                <?php 
                    $pacientes_query = "SELECT * FROM pacientes";
                    $pacientes_query_run = mysqli_query($con, $pacientes_query);

                    if($pacientes_total = mysqli_num_rows($pacientes_query_run)) {
                        echo '<div class="number"> '.$pacientes_total.' </div>';
                    }
                    else {
                        echo '<div class="number"> Nenhum dado </div>';
                    }           
                ?>            
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"> Em tratamento </span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-group cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"> Financeiro </div>
                  <?php 
                    $financeiro_query = "SELECT * FROM financeiro";
                    $financeiro_query_run = mysqli_query($con, $financeiro_query);

                    if($financeiro_total = mysqli_num_rows($financeiro_query_run)) {
                        echo '<div class="number"> '.$financeiro_total.' </div>';
                    }
                    else {
                        echo '<div class="number"> Nenhum dado </div>';
                    }           
                  ?>      
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"> Nº de pagamentos </span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-dollar cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"> Consultas </div>
                  <?php 
                    $consultas_query = "SELECT * FROM consultas";
                    $consultas_query_run = mysqli_query($con, $consultas_query);

                    if($consultas_total = mysqli_num_rows($consultas_query_run)) {
                        echo '<div class="number"> '.$consultas_total.' </div>';
                    }
                    else {
                        echo '<div class="number"> Nenhum dado </div>';
                    }           
                ?>      
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"> Total ao mês </span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-clinic cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"> Prontuários </div>
                  <?php 
                    $prontuario_query = "SELECT * FROM prontuarios";
                    $prontuario_query_run = mysqli_query($con, $prontuario_query);

                    if($prontuario_total = mysqli_num_rows($prontuario_query_run)) {
                        echo '<div class="number"> '.$prontuario_total.' </div>';
                    }
                    else {
                        echo '<div class="number"> Nenhum dado </div>';
                    }           
                  ?>      
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"> Total </span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-paste cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Lançamentos do financeiro</div>
              <div class="sales-details">
              <div id="piechart2" style="width: 420px; height: 300px; margin-left: 170px;"></div>         
          </div>
        </div>

        <div class="top-sales box">
          <div class="title">Descontos de Convênios (%)</div>
          <div id="piechart" style="width: 352px; height: 310px; margin-left: 30px;"></div>
        </div>
      </div>
    </div>

  </section>
  </main>
        <!--========== MAIN JS ==========-->
        <script src="../../public/scripts/sidebar.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script>
            // === include 'setup' then 'config' above ===
            const labels = <?php echo json_encode($tipo_pagamento) ?>;
            const data = {
              labels: labels,
              datasets: [{
                label: 'Valor - Tipo de pagamento',
                data: <?php echo json_encode($valor) ?>,
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 159, 64, 0.2)',
                  'rgba(255, 205, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                  'rgb(255, 99, 132)',
                  'rgb(255, 159, 64)',
                  'rgb(255, 205, 86)',
                  'rgb(75, 192, 192)',
                  'rgb(54, 162, 235)',
                  'rgb(153, 102, 255)',
                  'rgb(201, 203, 207)'
                ],
                borderWidth: 1
              }]
            };

            const config = {
              type: 'bar',
              data: data,
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              },
            };

            var myChart = new Chart(
              document.getElementById('myChart'),
              config
            );
        </script>

    </body>
</html>