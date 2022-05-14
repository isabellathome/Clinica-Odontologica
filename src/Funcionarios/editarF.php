<?php
    session_start();
    ob_start();
    include_once "../conexao.php";

    if((!isset($_SESSION['id'])) AND (!isset($_SESSION['funcao']))){
        $_SESSION['msg'] = "<p style='color: #ff0000; margin-bottom: 45px'>Erro: Necessário realizar o login para acessar a página!</p>";
        header("Location: login.php");
    }

    $dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);
    $id = $_GET['id'];

    echo "id:".$id;

    $nome = $dados['nome'];
    $cpf = $dados['cpf'];
    $nascimento = $dados['nascimento'];
    $email = $dados['email'];
    $celular = $dados['celular'];
    $salario = $dados['salario'];
    $funcao = $dados['funcao'];

    $logradouro = $dados['logradouro'];
    $cep = $dados['cep'];
    $numero = $dados['numero'];
    $bairro = $dados['bairro'];
    $complemento = $dados['complemento'];
    $cidade = $dados['cidade'];
    $estado = $dados['estado'];

    $usuario = $dados['usuario'];
    $senha_usuario = $dados['senha_usuario'];

    $result_funcionarios = "UPDATE funcionarios SET nome='$nome', cpf='$cpf', nascimento='$nascimento', email='$email', celular='$celular', salario='$salario', funcao='$funcao' WHERE id='$id'";
    $resultado_funcionarios = $conn->prepare($result_funcionarios);
    $resultado_funcionarios->execute();

    $result_enderecos = "UPDATE enderecosf SET logradouro='$logradouro', cep='$cep', numero='$numero', bairro='$bairro', complemento='$complemento', cidade='$cidade', estado='$estado' WHERE funcionario_id='$id'";
    $resultado_enderecos = $conn->prepare($result_enderecos);
    $resultado_enderecos->execute();

    $result_usuarios = "UPDATE usuarios SET usuario='$usuario', senha_usuario='$senha_usuario' WHERE funcionario_id='$id'";
    $resultado_usuarios = $conn->prepare($result_usuarios);
    $resultado_usuarios->execute();

    //header("Location: ../pageFuncionarios.php");

?>