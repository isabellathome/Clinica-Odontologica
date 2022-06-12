<?php require_once '../Prontuarios/ClassProntuario.php'; ?>
<?php require_once '../Prontuarios/ClassProntuarioDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header-second.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Prontuários | SO </title>
        
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
                    Prontuários
                    <a class="btn-new" href="formCadastro.php">
                        Novo Prontuário
                    </a>
               </p>

        <?php
            $classProntuarioDAO = new ClassProntuarioDAO();
            $array= $classProntuarioDAO->listar();
            echo "<div class='container'>";
            echo "<table id='tabela'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th> ID </th> ";
            echo "      <th> Nome do paciente </th> ";
            echo "      <th> Tratamento </th> ";
            echo "      <th> Dentista Responsável </th> ";
            echo "      <th> Visualizar </th> ";
            echo "      <th> Relatório </th> ";
            echo "      <th> Editar </th> ";
            echo "  <tr>";
            echo "</thead>";

            foreach ($array as $array) {
                echo "<tr>";
                echo "<td>". $array['id']            . "</td>";
                echo "<td>". $array['nome_paciente'] . "</td>";
                echo "<td>". $array['procedimento']          .   "</td>";
                echo "<td>". $array['nome_dentista']          . "</td>";
                echo "<td> ";

                ?>
                <form action="Detalhes.php" method="get">
                    <input type=hidden value="<?php echo $array['id'];?>"            name=id>
                    <input type=hidden value="<?php echo $array['nome_paciente'];?>" name=nome_paciente>
                    <input type=hidden value="<?php echo $array['nome_dentista'];?>" name=nome_dentista>
                    <input type=hidden value="<?php echo $array['procedimento'];?>"  name=procedimento>
                    <input type=hidden value="<?php echo $array['descricao'];?>"     name=descricao>
                    <input type=hidden value="<?php echo $array['data'];?>"          name=data>
                    <input type=hidden value="<?php echo $array['hora'];?>"          name=hora>   

                    <button class="btn-del"> <i class='bx bxs-user-detail bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="relatorio.php" method="get">
                    <input type=hidden value="<?php echo $array['id'];?>"            name=id>
                    <input type=hidden value="<?php echo $array['nome_paciente'];?>" name=nome_paciente>
                    <input type=hidden value="<?php echo $array['nome_dentista'];?>" name=nome_dentista>
                    <input type=hidden value="<?php echo $array['procedimento'];?>"  name=procedimento>
                    <input type=hidden value="<?php echo $array['descricao'];?>"     name=descricao>
                    <input type=hidden value="<?php echo $array['data'];?>"          name=data>
                    <input type=hidden value="<?php echo $array['hora'];?>"          name=hora> 

                    <button class="btn-del"> <i class='bx bx-notepad bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="formEditar.php" method="get">
                    <input type=hidden value="<?php echo $array['id'];?>"            name=id>
                    <input type=hidden value="<?php echo $array['nome_paciente'];?>" name=nome_paciente>
                    <input type=hidden value="<?php echo $array['nome_dentista'];?>" name=nome_dentista>
                    <input type=hidden value="<?php echo $array['procedimento'];?>"  name=procedimento>
                    <input type=hidden value="<?php echo $array['descricao'];?>"     name=descricao>
                    <input type=hidden value="<?php echo $array['data'];?>"          name=data>
                    <input type=hidden value="<?php echo $array['hora'];?>"          name=hora> 

                    <button class="btn-del"> <i class='bx bxs-edit bx-sm'></i></button>
                </form>		  
                <?php	
                echo "</td> ";
                ?>	  
                <?php            		      
            }
     
        ?>
        </section>
            </main>

            <!--========== MAIN JS ==========-->
            <script src="../../public/scripts/sidebar.js"> </script>

    </body>
</html>