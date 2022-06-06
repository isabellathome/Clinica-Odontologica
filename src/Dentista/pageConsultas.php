<?php require_once '../Consultas/ClassConsulta.php'; ?>
<?php require_once '../Consultas/ClassConsultaDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header-second.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Consultas | SO </title>
        
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
                    Consultas
               </p>

        <?php
            $classConsultaDAO = new ClassConsultaDAO();
            $array= $classConsultaDAO->listar();
            echo "<div class='container'>";
            echo "<table id='tabela'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th> ID </th> ";
            echo "      <th> Paciente </th> ";
            echo "      <th> Data </th> ";
            echo "      <th> Hora </th> ";
            echo "      <th> Notificar </th> ";
            echo "      <th> Visualizar </th> ";
            echo "  <tr>";
            echo "</thead>";

            foreach ($array as $array) {
                echo "<tr>";
                echo "<td>". $array['id']            . "</td>";
                echo "<td>". $array['nome_paciente'] . "</td>";
                echo "<td>". $array['data']          .   "</td>";
                echo "<td>". $array['hora']          . "</td>";
                echo "<td> ";

                ?>
                <form action="../Consultas/Notificacao.php" method="get">
                    <input type=hidden value= <?php echo $array['id'];?> name=id>
                    <input type=hidden value= <?php echo $array['nome_paciente'];?> name=nome_paciente>
                    <input type=hidden value= <?php echo $array['email'];?> name=email>
                    <input type=hidden value= <?php echo $array['data'];?> name=data>
                    <input type=hidden value= <?php echo $array['hora'];?> name=hora>
                    <input type=hidden value= <?php echo $array['nome_dentista'];?> name=nome_dentista>
                    <input type=hidden value= <?php echo $array['procedimento'];?> name=procedimento>
                    <input type=hidden value= <?php echo $array['descricao'];?> name=descricao>
                    <button class="btn-del"> <i class='bx bxs-bell-ring bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="../Consultas/Detalhes.php" method="get">
                    <input type=hidden value= <?php echo $array['id'];?> name=id>
                    <input type=hidden value= <?php echo $array['nome_paciente'];?> name=nome_paciente>
                    <input type=hidden value= <?php echo $array['email'];?> name=email>
                    <input type=hidden value= <?php echo $array['data'];?> name=data>
                    <input type=hidden value= <?php echo $array['hora'];?> name=hora>
                    <input type=hidden value= <?php echo $array['nome_dentista'];?> name=nome_dentista>
                    <input type=hidden value= <?php echo $array['procedimento'];?> name=procedimento>
                    <input type=hidden value= <?php echo $array['descricao'];?> name=descricao>
                    <button class="btn-del"> <i class='bx bxs-user-detail bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo "</tr>";               		      
            }
     
        ?>
        </section>
            </main>

            <!--========== MAIN JS ==========-->
            <script src="../../public/scripts/sidebar.js"> </script>

    </body>
</html>