        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">                
                <a href="../AdminGeral/Dashboard.php" class="header__logo"> Sorriso Odonto </a>
    
                <form class="header__search" action="../View/Search.php?a=buscar" method="post">
                    <input type="search" placeholder="Pesquisar" name="palavra" class="header__input">                        
                    <button class="btn-search" type="submit"> <i class='bx bx-search'></i> </button>
                </form>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="../AdminGeral/Dashboard.php" class="nav__link nav__logo">
                        <i class='bx bx-wink-smile bx-tada bx-sm' ></i>
                        <span class="nav__logo-name"> Sorriso Odonto </span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle"> <?php echo $_SESSION['funcao']; ?> </h3>
    
                            <a href="../AdminGeral/Dashboard.php" class="nav__link active">
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
                                        <a href="../AdminGeral/pageInfo.php" class="nav__dropdown-item"> Informações </a>
                                        <a href="../AdminGeral/pagePag.php" class="nav__dropdown-item"> Pagamentos </a>
                                    </div>
                                </div>
                            </div>

                            <!-- <a href="../Avisos/pageAvisos.php" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name"> Avisos </span>
                            </a> -->
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
                                        <a href="../Funcionarios/pageFuncionarios.php" class="nav__dropdown-item"> Funcionários </a>
                                        <a href="../Pacientes/pagePacientes.php" class="nav__dropdown-item"> Pacientes </a>
                                        <a href="../Prontuarios/pageProntuarios.php" class="nav__dropdown-item"> Prontuários </a>
                                        <a href="../Consultas/pageConsultas.php" class="nav__dropdown-item"> Consultas </a>
                                        <a href="../Convenios/pageConvenios.php" class="nav__dropdown-item"> Convênios </a>
                                        <a href="../Financeiro/pageFinanceiro.php" class="nav__dropdown-item"> Financeiro </a>
                                    </div>
                                </div>

                            </div>

                            <a href="../Carga-horaria/pageValidar.php" class="nav__link">
                                <i class='bx bx-time-five nav__icon' ></i>
                                <span class="nav__name"> Carga-horária </span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="../pageSair.php" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name"> Sair </span>
                </a>
            </nav>
        </div>