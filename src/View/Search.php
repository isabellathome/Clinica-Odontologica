<?php require_once '../FuncionariosDao/ClassUsuario.php'; ?>
<?php require_once '../FuncionariosDao/ClassUsuarioDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Funcionários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../so-icon.svg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/table.css">
    </head>
    
    <body>
        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <p>
                    Resultados da sua pesquisa:
               </p>

<?php 

    $conexao=mysqli_connect('localhost','root','','clinica_odontologica');

    $a=$_GET['a'];

    if($a=="buscar") {
        $palavra=trim($_POST["palavra"]);
        $sql="SELECT * FROM contatos WHERE nome LIKE '%$palavra' ORDER BY nome"; 
        $resultado = mysqli_query($conexao, $sql);

        $numRegistros = mysqli_num_rows($resultado);
            if($numRegistros!=0) {
                while($exibe=mysqli_fetch_object($resultado)) {
                    echo "-->   ". $exibe->nome ."   |   ";
                    echo $exibe->matricula ."<br>";
                } 
            } else {
                header("Location: PageNone.php");
            }

    }

    ?>

    </section>
        </main>

        <!--========== MAIN JS ==========-->
        <script src="../../public/scripts/sidebar.js"> </script>

</body>
</html>