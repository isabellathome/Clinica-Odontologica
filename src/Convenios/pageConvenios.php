<?php require_once 'ClassConvenio.php'; ?>
<?php require_once 'ClassConvenioDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Convênios </title>
        
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
                    Convênios
                    <a class="btn-new" href="formConvenio.php">
                        Novo Convênio
                    </a>
               </p>

        <?php
            $classConvenioDAO = new ClassConvenioDAO();
            $array= $classConvenioDAO->listar();
            echo "<div class='container'>";
            echo "<table id='tabela'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th> Código </th> ";
            echo "      <th> Nome  </th> ";
            echo "      <th> Procedimento  </th> ";
            echo "      <th> Desconto </th> ";
            echo "      <th> Visualizar </th> ";
            echo "      <th> Editar </th> ";
            echo "      <th> Excluir </th>";
            echo "  <tr>";
            echo "</thead>";

            foreach ($array as $array) {
                echo "<tr>";
                echo "<td>". $array['codigo'] . "</td>";
                echo "<td>". $array['nome']  . "</td>";
                echo "<td>". $array['procedimento']  . "</td>";
                echo "<td>". $array['desconto']  . "</td>";
                echo "<td> ";

                ?>
                <form action="Detalhes.php" method="get">
                        <input type=hidden value= <?php echo $array['id'];?> name=id>
                        <input type=hidden value= <?php echo $array['nome'];?> name=nome>
                        <input type=hidden value= <?php echo $array['codigo'];?> name=codigo>
                        <input type=hidden value= <?php echo $array['valor'];?> name=valor>
                        <input type=hidden value= <?php echo $array['procedimento'];?> name=procedimento>
                        <input type=hidden value= <?php echo $array['desconto'];?> name=desconto>
                        <input type=hidden value= <?php echo $array['num_contemplados'];?> name=num_contemplados>
                        
                        <button class="btn-del"> <i class='bx bxs-user-detail bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="formEditar.php" method="get">
                        <input type=hidden value= <?php echo $array['id'];?> name=id>
                        <input type=hidden value= <?php echo $array['nome'];?> name=nome>
                        <input type=hidden value= <?php echo $array['codigo'];?> name=codigo>
                        <input type=hidden value= <?php echo $array['valor'];?> name=valor>
                        <input type=hidden value= <?php echo $array['procedimento'];?> name=procedimento>
                        <input type=hidden value= <?php echo $array['desconto'];?> name=desconto>
                        <input type=hidden value= <?php echo $array['num_contemplados'];?> name=num_contemplados>
                        <button class="btn-del"> <i class='bx bxs-edit bx-sm'></i></button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="Modal-excluir.php" method="get">
                        <input type=hidden value= <?php echo $array['codigo'];?> name=codigo>
                        <button class="btn-del"> <i class='bx bxs-trash bx-sm'></i></button>
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