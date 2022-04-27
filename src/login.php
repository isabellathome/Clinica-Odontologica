<?php
    session_start();
    ob_start();
    include_once "../database/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login | SO </title>

    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="shortcut icon" href="../so-icon.svg" type="image/x-icon">

</head>
<body>

    <div class="container">

    <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($dados['SendLogin'])) {
            //var_dump($dados);
            $query_usuario = "SELECT id, funcao, usuario, senha_usuario 
                            FROM usuarios 
                            WHERE usuario =:usuario  
                            LIMIT 1";
            $result_usuario = $conn->prepare($query_usuario);
            $result_usuario->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
            $result_usuario->execute();

            if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
                $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
                //var_dump($row_usuario);
                if(password_verify($dados['senha_usuario'], $row_usuario['senha_usuario'])){
                    $_SESSION['id'] = $row_usuario['id'];
                    $_SESSION['funcao'] = $row_usuario['funcao'];
                    header("Location: Dashboard.php");
                }else{
                    $_SESSION['msg'] = "<p style='color: #ff0000; margin-bottom: 45px'>Erro: Usuário ou senha inválida!</p>";
                }
            }else{
                $_SESSION['msg'] = "<p style='color: #ff0000; margin-bottom: 45px'>Erro: Usuário ou senha inválida!</p>";
            }            
        }

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

        <div class="form" id="login">
            <form action="" method="post">
                <h1 class="form_titulo"> Seja bem-vindo! </h1>
                <div class="form_input-grupo">
                  <input type="text" class="form_input" autofocus placeholder="Nome de usuário" name="usuario" id="usuario">
                </div>
                
                <div class="form_input-grupo">
                  <input type="password" class="form_input" autofocus placeholder="Senha" name="senha_usuario" id="senha">
                  <div class="padding"></div>                  
                </div>
                
                <input type="submit" class="form_button" value="Acessar" name="SendLogin">
            </form>   
        </div>

    </div>    
</body>
</html>