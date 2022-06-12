<?php require_once '../Pacientes/ClassPaciente.php'; ?>
<?php require_once '../Pacientes/ClassPacienteDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header-second.php") ?>

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
                    <a class="btn-new" href="formPaciente.php">
                        Novo Paciente
                    </a>
               </p>

        <?php
            $classPacienteDAO = new ClassPacienteDAO();
            $array= $classPacienteDAO->listar();
            echo "<div class='container'>";
            echo "<table id='tabela'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th> ID </th> ";
            echo "      <th> Nome </th> ";
            echo "      <th> Celular </th> ";
            echo "      <th> Email </th> ";
            echo "      <th> Visualizar </th> ";
            echo "      <th> Editar </th> ";
            echo "      <th> Desativar </th>";
            echo "  <tr>";
            echo "</thead>";

            foreach ($array as $array) {
                echo "<tr>";
                echo "<td>". $array['id'] . "</td>";
                echo "<td>". $array['nome']      . "</td>";
                echo "<td>". $array['celular'] . "</td>";
                echo "<td>". $array['email']      . "</td>";
                echo "<td> ";

                ?>

                <form action="Detalhes.php" method="get">
                    <input type=hidden value="<?php echo $array['id'];?>"          name=id>
                    <input type=hidden value="<?php echo $array['nome'];?>"        name=nome>
                    <input type=hidden value="<?php echo $array['cpf'];?>"         name=cpf>
                    <input type=hidden value="<?php echo $array['nascimento'];?>"  name=nascimento>
                    <input type=hidden value="<?php echo $array['email'];?>"       name=email>
                    <input type=hidden value="<?php echo $array['celular'];?>"     name=celular>
                    <input type=hidden value="<?php echo $array['telefone'];?>"    name=telefone>
                    <input type=hidden value="<?php echo $array['ultimo_trat'];?>" name=ultimo_trat>
                    <input type=hidden value="<?php echo $array['quimio'];?>"      name=quimio>
                    <input type=hidden value="<?php echo $array['alergias'];?>"    name=alergias>
                    <input type=hidden value="<?php echo $array['logradouro'];?>"  name=logradouro>
                    <input type=hidden value="<?php echo $array['cep'];?>"         name=cep>
                    <input type=hidden value="<?php echo $array['numero'];?>"      name=numero>
                    <input type=hidden value="<?php echo $array['bairro'];?>"      name=bairro>
                    <input type=hidden value="<?php echo $array['complemento'];?>" name=complemento>
                    <input type=hidden value="<?php echo $array['cidade'];?>"      name=cidade>
                    <input type=hidden value="<?php echo $array['estado'];?>"      name=estado>

                    <button class="btn-del"> <i class='bx bxs-user-detail bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="formEditar.php" method="get">
                    <input type=hidden value="<?php echo $array['id'];?>"          name=id>
                    <input type=hidden value="<?php echo $array['nome'];?>"        name=nome>
                    <input type=hidden value="<?php echo $array['cpf'];?>"         name=cpf>
                    <input type=hidden value="<?php echo $array['nascimento'];?>"  name=nascimento>
                    <input type=hidden value="<?php echo $array['email'];?>"       name=email>
                    <input type=hidden value="<?php echo $array['celular'];?>"     name=celular>
                    <input type=hidden value="<?php echo $array['telefone'];?>"    name=telefone>
                    <input type=hidden value="<?php echo $array['ultimo_trat'];?>" name=ultimo_trat>
                    <input type=hidden value="<?php echo $array['quimio'];?>"      name=quimio>
                    <input type=hidden value="<?php echo $array['alergias'];?>"    name=alergias>
                    <input type=hidden value="<?php echo $array['logradouro'];?>"  name=logradouro>
                    <input type=hidden value="<?php echo $array['cep'];?>"         name=cep>
                    <input type=hidden value="<?php echo $array['numero'];?>"      name=numero>
                    <input type=hidden value="<?php echo $array['bairro'];?>"      name=bairro>
                    <input type=hidden value="<?php echo $array['complemento'];?>" name=complemento>
                    <input type=hidden value="<?php echo $array['cidade'];?>"      name=cidade>
                    <input type=hidden value="<?php echo $array['estado'];?>"      name=estado>

                    <button class="btn-del"> <i class='bx bxs-edit bx-sm'></i></button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="Modal-excluir.php" method="get">
                    <input type=hidden value="<?php echo $array['id'];?>" name=id>
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