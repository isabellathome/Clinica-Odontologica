<?php require_once 'ClassFuncionario.php'; ?>
<?php require_once 'ClassFuncionarioDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Funcionários </title>
        
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
                    Funcionários
                    <a class="btn-new" href="formCadastro.php">
                        Novo Funcionário
                    </a>
               </p>

        <?php
            $classFuncionarioDAO = new ClassFuncionarioDAO();
            $array= $classFuncionarioDAO->listar();
            echo "<div class='container'>";
            echo "<table id='tabela'>";
            echo "<thead>";
            echo "  <tr>";
            echo "      <th> ID </th> ";
            echo "      <th> Nome </th> ";
            echo "      <th> Função </th> ";
            echo "      <th> Celular </th> ";
            echo "      <th> Visualizar </th> ";
            echo "      <th> Editar </th> ";
            echo "      <th> Desativar </th>";
            echo "  <tr>";
            echo "</thead>";

            foreach ($array as $array) {
                echo "<tr>";
                echo "<td>". $array['id'] . "</td>";
                echo "<td>". $array['nome']      . "</td>";
                echo "<td>". $array['funcao'] . "</td>";
                echo "<td>". $array['celular']      . "</td>";
                echo "<td> ";

                ?>

                <form action="Detalhes.php" method="get">
                    <input type=hidden value= <?php echo $array['id'];?> name=id>
                    <input type=hidden value= <?php echo $array['nome'];?> name=nome>
                    <input type=hidden value= <?php echo $array['cpf'];?> name=cpf>
                    <input type=hidden value= <?php echo $array['nascimento'];?> name=nascimento>
                    <input type=hidden value= <?php echo $array['email'];?> name=email>
                    <input type=hidden value= <?php echo $array['celular'];?> name=celular>
                    <input type=hidden value= <?php echo $array['salario'];?> name=salario>
                    <input type=hidden value= <?php echo $array['usuario'];?> name=usuario>
                    <input type=hidden value= <?php echo $array['senha_usuario'];?> name=senha_usuario>
                    <input type=hidden value= <?php echo $array['funcao'];?> name=funcao>
                    <input type=hidden value= <?php echo $array['logradouro'];?> name=logradouro>
                    <input type=hidden value= <?php echo $array['cep'];?> name=cep>
                    <input type=hidden value= <?php echo $array['numero'];?> name=numero>
                    <input type=hidden value= <?php echo $array['bairro'];?> name=bairro>
                    <input type=hidden value= <?php echo $array['complemento'];?> name=complemento>
                    <input type=hidden value= <?php echo $array['cidade'];?> name=cidade>
                    <input type=hidden value= <?php echo $array['estado'];?> name=estado>
                    <button class="btn-del"> <i class='bx bxs-user-detail bx-sm'></i> </button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="formEditar.php" method="get">
                    <input type=hidden value= <?php echo $array['id'];?> name=id>
                    <input type=hidden value= <?php echo $array['nome'];?> name=nome>
                    <input type=hidden value= <?php echo $array['cpf'];?> name=cpf>
                    <input type=hidden value= <?php echo $array['nascimento'];?> name=nascimento>
                    <input type=hidden value= <?php echo $array['email'];?> name=email>
                    <input type=hidden value= <?php echo $array['celular'];?> name=celular>
                    <input type=hidden value= <?php echo $array['salario'];?> name=salario>
                    <input type=hidden value= <?php echo $array['usuario'];?> name=usuario>
                    <input type=hidden value= <?php echo $array['senha_usuario'];?> name=senha_usuario>
                    <input type=hidden value= <?php echo $array['funcao'];?> name=funcao>
                    <input type=hidden value= <?php echo $array['logradouro'];?> name=logradouro>
                    <input type=hidden value= <?php echo $array['cep'];?> name=cep>
                    <input type=hidden value= <?php echo $array['numero'];?> name=numero>
                    <input type=hidden value= <?php echo $array['bairro'];?> name=bairro>
                    <input type=hidden value= <?php echo $array['complemento'];?> name=complemento>
                    <input type=hidden value= <?php echo $array['cidade'];?> name=cidade>
                    <input type=hidden value= <?php echo $array['estado'];?> name=estado>
                    <button class="btn-del"> <i class='bx bxs-edit bx-sm'></i></button>
                </form>		  
                <?php	
                echo "</td> ";
                echo  "<td> "; 
                ?>
                <form action="Modal-excluir.php" method="get">
                        <input type=hidden value= <?php echo $array['id'];?> name=id>
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