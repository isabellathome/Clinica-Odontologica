<!-- alterarProcesso.php -->
<?php require_once 'ClassFuncionario.php'; ?>
<?php require_once 'ClassFuncionarioDAO.php';?>

<?php
 
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $nascimento = $_GET['nascimento'];
    $email = $_GET['email'];
    $celular = $_GET['celular'];
    $salario = $_GET['salario'];
    $usuario = $_GET['usuario'];
    $senha_usuario = $_GET['senha_usuario'];
    $funcao = $_GET['funcao'];
    $logradouro = $_GET['logradouro'];
    $cep = $_GET['cep'];
    $numero = $_GET['numero'];
    $bairro = $_GET['bairro'];
    $complemento = $_GET['complemento'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];
    
    $classFuncionarioDAO = new ClassFuncionarioDAO();
    $array = $classFuncionarioDAO->alterar($id, $nome, $cpf, $nascimento, $email, $celular, $salario, $usuario, $senha_usuario, $funcao, $logradouro, $cep, $numero, $bairro, $complemento, $cidade, $estado);

    $classUsuarioDAO = new ClassFuncionarioDAO();
    $array = $classUsuarioDAO->alterarUsuario($id, $usuario, $senha_usuario, $funcao);
    
    // echo $array;
    if($array==true) {
        header('Location: pageFuncionarios.php');
    } else {
        echo "Erro";
    }
		
?>
	