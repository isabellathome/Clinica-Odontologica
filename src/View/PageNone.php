<?php include ("../session.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Resultado | Error </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" href="../../public/css/pagenone.css">

        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>

<body>
        <!--==================== HEADER ====================-->
        <header class="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    Sorriso Odonto
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="../AdminGeral/Dashboard.php" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="../Pacientes/pagePacientes.php" class="nav__link">Pacientes</a>
                        </li>
                        <li class="nav__item">
                            <a href="../FuncionariosDao/listar.php" class="nav__link">Funcionários</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>
                </div>

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home">
                <div class="home__container container">
                    <div class="home__data">
                        <span class="home__subtitle">Error 404</span>
                        <h1 class="home__title">Hey amigo</h1>
                        <p class="home__description">
                            O que você buscou, não foi encontrado <br> nenhum resultado. Tente novamente!
                        </p>
                      
                        <button class="home__button" onclick="history.back()"> Voltar </button>

                    </div>

                    <div class="home__img">
                        <img src="../../public/images/ghost-img.png" alt="">
                        <div class="home__shadow"></div>
                    </div>
                </div>

                <footer class="home__footer">
                    <span> Clínica Odontológica </span>
                    <span> | </span>
                    <span> Sorriso Odonto </span>
                </footer>
            </section>
        </main>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="../../public/scripts/scrollnone.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="../../public/scripts/pagenone.js"></script>
    </body>
</html>