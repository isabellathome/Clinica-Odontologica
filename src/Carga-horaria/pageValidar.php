<?php include ("ClassCarga.php")?>
<?php include ("ClassCargaDAO.php") ?>
<?php include ("../session.php")?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Carga Horária | Funcionários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/table.css">
        <link rel="stylesheet" href="../../public/css/button-validar.css">

    </head>
    <body>
    <main>
            <section>

                <p> Carga Horária </p>
                
                <section class="modal container">
                    <button class="modal__button" id="open-modal">
                        Validar
                    </button>

                    <div class="modal__container" id="modal-container">
                        <div class="modal__content">
                            <div class="modal__close close-modal" title="Close">
                                <i class='bx bx-x'></i>
                            </div>

                            <img src="../../public/images/check.svg" alt="" class="modal__img">

                            <h1 class="modal__title"> Ótimo! </h1>
                            <p class="modal__description"> Todas as cargas horárias dos funcionários foram validadas! </p>

                            <button class="modal__button-link close-modal">
                                Fechar
                            </button>
                        </div>
                    </div>
                </section>

            <?php
                $classCargaDAO = new ClassCargaDAO();
                $array= $classCargaDAO->listar();
                echo "<div class='container'>";
                echo "<table id='tabela'>";
                echo "<thead>";
                echo "  <tr>";
                echo "      <th> Nome do Funcionário </th> ";
                echo "      <th> Data </th> ";
                echo "      <th> Horário de entrada </th> ";
                echo "      <th> Horário de saída </th> ";
                echo "      <th> Visualizar </th> ";
                echo "  <tr>";
                echo "</thead>";

                foreach ($array as $array) {
                    echo "<tr>";
                    echo "<td>". $array['nome_funcionario']  . "</td>";   
                    echo "<td>". $array['data']        . "</td>";
                    echo "<td>". $array['hora_entrada'] . "</td>";
                    echo "<td>". $array['hora_saida'] . "</td>";                   
                    echo "<td> ";
                                    
                    ?>

                    <form action="Carga-semanal.php" method="get">
                        <input type=hidden value= <?php echo $array['nome_funcionario'];?> name=nome_funcionario>
                        <input type=hidden value= <?php echo $array['data'];?> name=data>
                        <input type=hidden value= <?php echo $array['hora_entrada'];?> name=hora_entrada>
                        <input type=hidden value= <?php echo $array['hora_saida'];?> name=hora_saida>

                        <button style="margin-top: -5px;" class="btn-del"> <i class='bx bxs-user-detail bx-sm'></i> </button>
                    </form>	

                    <?php	
                    echo "</td> ";                
                }            
                    ?>

            </section>

            

        </main>

        <!--========== MAIN JS ==========-->
        <script src="../../public/scripts/sidebar.js"> </script>
        <script src="../../public/scripts/button-validar.js"></script>

    </div>
    </body>
</html>