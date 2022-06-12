<?php require_once 'ClassFinanceiro.php'; ?>
<?php require_once 'ClassFinanceiroDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Financeiro | SO </title>
        
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
                    Financeiro
                    <a class="btn-new" href="formCadastro.php">
                        Novo Pagamento
                    </a>
               </p>

        <?php
            $classFinanceiroDAO = new ClassFinanceiroDAO();
            $array= $classFinanceiroDAO->listar();
            echo "<div class='container'>";
            echo "<table id='tabela'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th> ID </th> ";
            echo "      <th> Valor </th> ";
            echo "      <th> Vencimento </th> ";
            echo "      <th> Autor </th> ";
            echo "      <th> Status </th> ";
            echo "      <th> Visualizar </th> ";
            echo "      <th> Editar </th> ";
            echo "      <th> Relatório </th> ";
            echo "  <tr>";
            echo "</thead>";

            foreach ($array as $array) {
                echo "<tr>";
                echo "<td>". $array['id']         . "</td>";
                echo "<td>". $array['valor']      . "</td>";
                echo "<td>". $array['vencimento'] . "</td>";
                echo "<td>". $array['autor']      . "</td>";
                echo "<td>". $array['status_pag']     . "</td>";
                echo "<td> ";

                ?>
                <form action="Detalhes.php" method="get">
                    <input type=hidden value= <?php echo $array['id'];?> name=id>
                    <input type=hidden value= <?php echo $array['valor'];?> name=valor>
                    <input type=hidden value= <?php echo $array['vencimento'];?> name=vencimento>
                    <input type=hidden value= <?php echo $array['parcelas'];?> name=parcelas>
                    <input type=hidden value= <?php echo $array['tipo_pagamento'];?> name=tipo_pagamento>
                    <input type=hidden value= <?php echo $array['motivo'];?> name=motivo>
                    <input type=hidden value= <?php echo $array['autor'];?> name=autor>
                    <input type=hidden value= <?php echo $array['status_pag'];?> name=status_pag>
                    <button class="btn-del"> <i class='bx bxs-user-detail bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="formEditar.php" method="get">
                    <input type=hidden value="<?php echo $array['id'];?>"             name=id>
                    <input type=hidden value="<?php echo $array['valor'];?>"          name=valor>
                    <input type=hidden value="<?php echo $array['vencimento'];?>"     name=vencimento>
                    <input type=hidden value="<?php echo $array['parcelas'];?>"       name=parcelas>
                    <input type=hidden value="<?php echo $array['tipo_pagamento'];?>" name=tipo_pagamento>
                    <input type=hidden value="<?php echo $array['motivo'];?>"         name=motivo>
                    <input type=hidden value="<?php echo $array['autor'];?>"          name=autor>
                    <input type=hidden value="<?php echo $array['status_pag'];?>"     name=status_pag>

                    <button class="btn-del"> <i class='bx bxs-edit bx-sm'></i></button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="relatorio.php" method="get">
                    <input type=hidden value="<?php echo $array['id'];?>"             name=id>
                    <input type=hidden value="<?php echo $array['valor'];?>"          name=valor>
                    <input type=hidden value="<?php echo $array['vencimento'];?>"     name=vencimento>
                    <input type=hidden value="<?php echo $array['parcelas'];?>"       name=parcelas>
                    <input type=hidden value="<?php echo $array['tipo_pagamento'];?>" name=tipo_pagamento>
                    <input type=hidden value="<?php echo $array['motivo'];?>"         name=motivo>
                    <input type=hidden value="<?php echo $array['autor'];?>"          name=autor>
                    <input type=hidden value="<?php echo $array['status_pag'];?>"     name=status_pag>

                    <button class="btn-del"> <i class='bx bx-notepad bx-sm'></i> </button>
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