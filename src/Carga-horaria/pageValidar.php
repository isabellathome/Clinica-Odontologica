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

                <p>
                    Carga Horária
               </p>

        <?php
            $classCargaDAO = new ClassCargaDAO();
            $arrayE= $classCargaDAO->listarEntrada();
            $array= $classCargaDAO->listarSaida();
            echo "<div class='container'>";
            echo "<table id='tabela'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th> Nome do Funcionário </th> ";
            echo "      <th> Data </th> ";
            echo "      <th> Horário de entrada </th> ";
            echo "      <th> Horário de saída </th> ";
            echo "      <th> Visualizar </th> ";
            echo "      <th> Validar </th> ";
            echo "  <tr>";
            echo "</thead>";

            foreach ($array as $array) {
                echo "<tr>";
                echo "<td>". $array['nome_funcionario']  . "</td>";
                echo "<td>". $array['data_saida']        . "</td>";
 
                foreach ($arrayE as $arrayE) {
                    echo "<td>". $arrayE['hora_entrada'] . "</td>";
                }

                echo "<td>". $array['hora_saida']        . "</td>";
                echo "<td> ";
                       		      
                ?>

                <form action="Carga-semanal.php" method="get">
                    <input type=hidden value= <?php echo $array['nome_funcionario'];?> name=nome_funcionario>
                    <input type=hidden value= <?php echo $array['data_saida'];?> name=data_saida>
                    <input type=hidden value= <?php echo $arrayE['hora_entrada'];?> name=hora_entrada>
                    <input type=hidden value= <?php echo $array['hora_saida'];?> name=hora_saida>
                    
                    <button class="btn-del"> <i class='bx bxs-user-detail bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo "<td> ";

                ?>
                    
                <button style="margin-top: -10px;" class="btn-del"> <i class='bx bx-user-check bx-sm'></i> </button>
	  
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