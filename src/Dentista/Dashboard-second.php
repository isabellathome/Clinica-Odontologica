<?php include ("../session.php") ?>
<?php include ("../components/header-second.php") ?>
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
          colors: ['#2BD47D', '#66b0ff', '#ec8f6e', '#f3b49f', '#f6c7b6'],
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));

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
            <div class="box-topic"> Convênios </div>
                  <?php 
                    $convenios_query = "SELECT * FROM convenios";
                    $convenios_query_run = mysqli_query($con, $convenios_query);

                    if($convenios_total = mysqli_num_rows($convenios_query_run)) {
                        echo '<div class="number"> '.$convenios_total.' </div>';
                    }
                    else {
                        echo '<div class="number"> Nenhum dado </div>';
                    }           
                  ?>      
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"> Ativos </span>
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

      <div class="info-boxes">
        <div class="recent-info box">
          <div class="title"> Olá! </div>              
              <p style="margin-top: 15px; text-align: justify;"> Trabalhar em equipe é saber lutar em conjunto por um mesmo objetivo. Nem sempre é fácil manter a união e a concordância entre todos quando uma equipe é composta por diferentes individualidades. </p>

                <br>

              <p style="text-align: justify;"> Mas é importante saber separar o que é individual do que é de interesse para o grupo. A vitória apenas será alcançada se todos se unirem e trabalharem em conjunto. No final todo sacrifício valerá a pena e sei que pequenos desentendimentos serão esquecidos. </p>
              
                  <br>
              <p style="text-align: justify;"> "As pessoas mudam, as circunstâncias mudam, mas Deus sempre permanece o mesmo" - Justin Bieber. </p>
            </div>

        <div class="top-info box">
          <div class="title">Descontos de Convênios (%)</div>
          <div id="donutchart" style="width: 392px; height: 310px;"></div>
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
              type: 'line',
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