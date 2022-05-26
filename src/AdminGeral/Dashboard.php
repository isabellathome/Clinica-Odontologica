<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

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
            <div class="number">15,739</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Em tratamento</span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-group cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Financeiro</div>
            <div class="number">138,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Total em reais</span>
            </div>
          </div>
          <i style="margin-left: 45px" class='bx bx-dollar cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Consultas</div>
            <div class="number">2,383</div>
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
            <div class="number">16,142</div>
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
          <div class="title">Últimos lançamentos do financeiro</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Data</li>
              <li><a href="#">17 Maio 2022</a></li>
              <li><a href="#">17 Maio 2022</a></li>
              <li><a href="#">17 Maio 2022</a></li>
              <li><a href="#">17 Maio 2022</a></li>
              <li><a href="#">17 Maio 2022</a></li>
              <li><a href="#">17 Maio 2022</a></li>
              <li><a href="#">17 Maio 2022</a></li>
              
            </ul>
            <ul class="details">
            <li class="topic">Tipo</li>
            <li><a href="#">Entrada</a></li>
            <li><a href="#">Entrada</a></li>
            <li><a href="#">Saída</a></li>
            <li><a href="#">Entrada</a></li>
            <li><a href="#">Saída</a></li>
            <li><a href="#">Saída</a></li>
             <li><a href="#">Entrada</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Motivo</li>
            <li><a href="#">Tratamento paciente</a></li>
            <li><a href="#">Tratamento paciente</a></li>
            <li><a href="#">Salários</a></li>
            <li><a href="#">Tratamento paciente</a></li>
            <li><a href="#">Material de limpeza</a></li>
            <li><a href="#">Café</a></li>
            <li><a href="#">Tratamento paciente</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">R$ 204.98</a></li>
            <li><a href="#">R$ 24.55</a></li>
            <li><a href="#">R$ 25.88</a></li>
            <li><a href="#">R$ 170.66</a></li>
            <li><a href="#">R$ 56.56</a></li>
            <li><a href="#">R$ 44.95</a></li>
            <li><a href="#">R$ 67.33</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">Ver tudo</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Últimas consultas</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <span class="product">Ana Carolina Dias</span>
            </a>
            <span class="acessar">Acessar</span>
          </li>
          <li>
            <a href="#">
              <span class="product">Juan da Luz</span>
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
              <span class="product">Caroline Ribeiro</span>
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
              <span class="product">Davi Lucca da Cruz</span>
            </a>
            <span class="acessar">Acessar</span>
          </li>
            <li>
            <a href="#">
              <span class="product">Leonardo Moraes</span>
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