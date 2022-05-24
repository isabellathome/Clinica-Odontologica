<?php include ("../session.php") ?>
<?php include ("../components/header-second.php") ?>

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
    </head>
    <body>

<!--========== CONTENTS ==========-->
        <main>
 
  <section class="home-section">
   
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Pacientes</div>
            <div class="number">532</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Em tratamento</span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-group cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Avisos</div>
            <div class="number">1</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i> 
              <span class="text">Total</span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-bell cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Consultas</div>
            <div class="number">472</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Total ao mês</span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-clinic cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Prontuários</div>
            <div class="number">5143</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Total</span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-paste cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Consultas Recentes</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Data</li>
              <li><a href="#">20 Maio 2022</a></li>
              <li><a href="#">20 Maio 2022</a></li>
              <li><a href="#">20 Maio 2022</a></li>
              <li><a href="#">20 Maio 2022</a></li>
              <li><a href="#">20 Maio 2022</a></li>
              <li><a href="#">20 Maio 2022</a></li>
              <li><a href="#">20 Maio 2022</a></li>
              
            </ul>
            <ul class="details">
            <li class="topic">Hora</li>
            <li><a href="#">08:00</a></li>
            <li><a href="#">08:40</a></li>
            <li><a href="#">09:00</a></li>
            <li><a href="#">09:20</a></li>
            <li><a href="#">09:40</a></li>
            <li><a href="#">10:00</a></li>
            <li><a href="#">10:20</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Paciente</li>
            <li><a href="#">Eloah Oliveira</a></li>
            <li><a href="#">Lucas Azevedo</a></li>
            <li><a href="#">Thomas Lopes</a></li>
            <li><a href="#">Nellie Caldeira</a></li>
            <li><a href="#">Carlos Eduardo Costa</a></li>
            <li><a href="#">Ben Santos</a></li>
            <li><a href="#">Samuel da Conceição</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Procedimento</li>
            <li><a href="#"></a></li>
            <li><a href="#">Ortodôntico</a></li>
            <li><a href="#">Ortodôntico</a></li>
            <li><a href="#">Ortodôntico</a></li>
            <li><a href="#">Ortodôntico</a></li>
            <li><a href="#">Ortodôntico</a></li>
            <li><a href="#">Ortodôntico</a></li>
            <li><a href="#">Ortodôntico</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">Ver todas</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Últimos prontuários acessados</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <span class="product">Samuel da Conceiçãos</span>
            </a>
            <span class="acessar">Acessar</span>
          </li>
          <li>
            <a href="#">
              <span class="product">Ben Santos</span>
            </a>
            <span class="acessar">Acessar</span>
          </li>
          <li>
            <a href="#">
              <span class="product">Carlos Eduardo Costa</span>
            </a>
            <span class="acessar">Acessar</span>
          </li>
          <li>
            <a href="#">
              <span class="product">Nellie Caldeira</span>
            </a>
            <span class="acessar">Acessar</span>
          </li>
          <li>
            <a href="#">
              <span class="product">Thomas Lopes</span>
            </a>
            <span class="acessar">Acessar</span>
          </li>
          <li>
            <a href="#">
              <span class="product">Lucas Azevedo</span>
            </a>
            <span class="acessar">Acessar</span>
          </li>
          </ul>
          <div class="button">
            <a href="#">Ver Mais</a>
          </div>
        </div>
      </div>
    </div>
  </section>

        </main>

        <!--========== MAIN JS ==========-->
        <script src="../../public/scripts/sidebar.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </body>
</html>