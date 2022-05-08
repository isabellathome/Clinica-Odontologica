<?php
    session_start();
    ob_start();
    include_once "../conexao.php";

    if((!isset($_SESSION['id'])) AND (!isset($_SESSION['funcao']))){
        $_SESSION['msg'] = "<p style='color: #ff0000; margin-bottom: 45px'>Erro: Necessário realizar o login para acessar a página!</p>";
        header("Location: login.php");
    }

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    var_dump($dados);

    //Verificar se o usuario clicou no botao
    if(!empty($dados)){
        $query_funcionario = "INSERT INTO funcionarios (nome, cpf, nascimento, email, celular, salario, funcao) VALUES (:nome, :cpf, :nascimento, :email, :celular, :salario, :funcao)";
        $cad_funcionario = $conn->prepare($query_funcionario);
        $cad_funcionario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
        $cad_funcionario->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
        $cad_funcionario->bindParam(':nascimento', $dados['nascimento'], PDO::PARAM_STR);
        $cad_funcionario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
        $cad_funcionario->bindParam(':celular', $dados['celular'], PDO::PARAM_STR);
        $cad_funcionario->bindParam(':salario', $dados['salario'], PDO::PARAM_STR);
        $cad_funcionario->bindParam(':funcao', $dados['funcao'], PDO::PARAM_STR);
        $cad_funcionario->execute();
        //var_dump($conn->lastInsertId());
        //Recuperar o ultimo id inserido
        $id_funcionario = $conn->lastInsertId();

        $query_endereco= "INSERT INTO enderecosf (cep, logradouro, numero, bairro, complemento, cidade, estado, funcionario_id) VALUES (:cep, :logradouro, :numero, :bairro, :complemento, :cidade, :estado, :funcionario_id)";
        $cad_endereco = $conn->prepare($query_endereco);
        $cad_endereco->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
        $cad_endereco->bindParam(':logradouro', $dados['logradouro'], PDO::PARAM_STR);
        $cad_endereco->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
        $cad_endereco->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);
        $cad_endereco->bindParam(':complemento', $dados['complemento'], PDO::PARAM_STR);
        $cad_endereco->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
        $cad_endereco->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
        $cad_endereco->bindParam(':funcionario_id', $id_funcionario, PDO::PARAM_INT);
        $cad_endereco->execute();

        //Criar a variavel global para salvar a mensagem de sucesso
        $_SESSION['msg'] = "<p style='color: green;'>Funcionário cadastrado com sucesso!</p>";

        header("Location: ../pageFuncionarios.php");
    } else{
        //Criar a variavel global para salvar a mensagem de erro
        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Funcionário não cadastrado com sucesso!</p>";

        
        header("Location: ../pageFuncionarios.php");
    }

?>