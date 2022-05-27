<!--  ControleFuncionario.php -->
<?php require_once "ClassFuncionario.php" ?> <!-- tem os metodos get e set -->
<?php require_once "ClassFuncionarioDAO.php" ?> <!-- tem o metodo cadastrar -->

<?php

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $salario = $_POST['salario'];
    $usuario = $_POST['usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $funcao = $_POST['funcao'];
    $logradouro = $_POST['logradouro'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $novoFuncionario = new ClassFuncionario(); // Forma de proteger os dados: GET() e SET(atribuir)
    $novoUsuario = new ClassFuncionario(); 

    $novoFuncionario->setNome($nome);
    $novoFuncionario->setCpf($cpf);
    $novoFuncionario->setNascimento($nascimento);
    $novoFuncionario->setEmail($email);
    $novoFuncionario->setCelular($celular);
    $novoFuncionario->setSalario($salario);
    $novoFuncionario->setUsuario($usuario);
    $novoFuncionario->setSenha_usuario($senha_usuario);
    $novoFuncionario->setFuncao($funcao);
    $novoFuncionario->setLogradouro($logradouro);
    $novoFuncionario->setCep($cep);
    $novoFuncionario->setNumero($numero);
    $novoFuncionario->setBairro($bairro);
    $novoFuncionario->setComplemento($complemento);
    $novoFuncionario->setCidade($cidade);
    $novoFuncionario->setEstado($estado);
    
    $novoUsuario->setUsuario($usuario);
    $novoUsuario->setSenha_usuario($senha_usuario);
    $novoUsuario->setFuncao($funcao);

    $classFuncionarioDAO = new ClassFuncionarioDAO();
    $classFuncionarioDAO->cadastrar($novoFuncionario);
    $classFuncionarioDAO->cadastrarUsuario($novoUsuario);

    header('Location: pageFuncionarios.php');
	
?>
 
