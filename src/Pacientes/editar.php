<?php require_once 'ClassPaciente.php'; ?>
<?php require_once 'ClassPacienteDAO.php';?>

<?php
 
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $nascimento = $_GET['nascimento'];
    $email = $_GET['email'];
    $celular = $_GET['celular'];
    $telefone = $_GET['telefone'];
    $ultimo_trat = $_GET['ultimo_trat'];
    $quimio = $_GET['quimio'];
    $alergias = $_GET['alergias'];
    $logradouro = $_GET['logradouro'];
    $cep = $_GET['cep'];
    $numero = $_GET['numero'];
    $bairro = $_GET['bairro'];
    $complemento = $_GET['complemento'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];
    
    $classPacienteDAO = new ClassPacienteDAO();
    $array = $classPacienteDAO->alterar($id, $nome, $cpf, $nascimento, $email, $celular, $telefone, $ultimo_trat, $quimio, $alergias, $logradouro, $cep, $numero, $bairro, $complemento, $cidade, $estado);

    if($array==true) {
        header('Location: pagePacientes.php');
    } else {
        echo "Erro";
    }
		
?>
	