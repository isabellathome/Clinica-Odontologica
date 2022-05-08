        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">                
                <a href="Dashboard.php" class="header__logo"> Sorriso Odonto </a>
    
                <div class="header__search">
                    <input type="search" placeholder="Pesquisa" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="../src/Dashboard.php" class="nav__link nav__logo">
                        <i class='bx bx-wink-smile bx-tada bx-sm' ></i>
                        <span class="nav__logo-name"> Sorriso Odonto </span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle"> <?php echo $_SESSION['funcao']; ?> </h3>
    
                            <a href="#" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name"> Home </span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name"> Perfil </span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item"> Senha </a>
                                        <a href="#" class="nav__dropdown-item"> Informações </a>
                                        <a href="#" class="nav__dropdown-item"> Pagamentos </a>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name"> Avisos </span>
                            </a>
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle"> Menu </h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-customize nav__icon'></i>
                                    <span class="nav__name"> Ações </span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="pageFuncionarios.php" class="nav__dropdown-item"> Funcionários </a>
                                        <a href="pagePacientes.php" class="nav__dropdown-item"> Pacientes </a>
                                        <a href="pageConsultas.php" class="nav__dropdown-item"> Consultas </a>
                                        <a href="pageFinanceiro.php" class="nav__dropdown-item"> Financeiro </a>
                                    </div>
                                </div>

                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-time-five nav__icon' ></i>
                                <span class="nav__name"> Carga-horária </span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="pageSair.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name"> Sair </span>
                </a>
            </nav>
        </div>