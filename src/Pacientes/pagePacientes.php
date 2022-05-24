<?php require_once '../FuncionariosDao/ClassUsuario.php'; ?>
<?php require_once '../FuncionariosDao/ClassUsuarioDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Pacientes | SO </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/table.css">
    </head>
    
    <body>
        <!--========== CONTENTS ==========-->
        <main>
            <section>

                <p>
                    Pacientes
                    <a class="btn-new" href="inicio.php">
                        Novo Paciente
                    </a>
               </p>

        <?php
            $classUsuarioDAO = new ClassUsuarioDAO();
            $array= $classUsuarioDAO->listar();
            echo "<div class='container'>";
            echo "<table id='tabela'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th> ID </th> ";
            echo "      <th> Nome </th> ";
            echo "      <th> Tratamento atual </th> ";
            echo "      <th> Email </th> ";
            echo "      <th> Visualizar </th> ";
            echo "      <th> Editar </th> ";
            echo "      <th> Desativar </th>";
            echo "  <tr>";
            echo "</thead>";
/*
            foreach ($array as $array) {
                echo "<tr>";
                echo "<td>". $array['matricula'] . "</td>";
                echo "<td>". $array['nome']      . "</td>";
                echo "<td> ";

                ?>
                <form action="Detalhes.php" method="get">
                        <input type=hidden value= <?php echo $array['matricula'];?> name=matricula>
                        <input type=hidden value= <?php echo $array['nome'];?> name=nome>
                        <button class="btn-del"> <i class='bx bxs-user-detail bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="alterar.php" method="get">
                        <input type=hidden value= <?php echo $array['matricula'];?> name=matricula>
                        <input type=hidden value= <?php echo $array['nome'];?> name=nome>
                        <button class="btn-del"> <i class='bx bxs-edit bx-sm'></i></button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="../View/Modal-excluir.php" method="get">
                        <input type=hidden value= <?php echo $array['matricula'];?> name=matricula>
                        <button class="btn-del"> <i class='bx bxs-trash bx-sm'></i></button>
                </form>		  
                <?php	
                echo "</td> ";
                echo "</tr>";               		      
            }
         */
        ?>
        </section>
            </main>

            <!--========== MAIN JS ==========-->
            <script src="../../public/scripts/sidebar.js"> </script>

    </body>
</html>