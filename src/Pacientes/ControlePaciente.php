<!--  ControleUsuario.php -->
<?php require_once "ClassPaciente.php" ?> <!-- tem os metodos get e set -->
<?php require_once "ClassPacienteDAO.php" ?> <!-- tem o metodo cadastrar -->

<?php

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $telefone = $_POST['telefone'];
    $ultimo_trat = $_POST['ultimo_trat'];
    $quimio = $_POST['quimio'];
    $alergias = $_POST['alergias'];
    $logradouro = $_POST['logradouro'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $novoPaciente = new ClassPaciente(); // Forma de proteger os dados: GET() e SET(atribuir)

    $novoPaciente->setNome($nome);
    $novoPaciente->setCpf($cpf);
    $novoPaciente->setNascimento($nascimento);
    $novoPaciente->setEmail($email);
    $novoPaciente->setCelular($celular);
    $novoPaciente->setTelefone($telefone);
    $novoPaciente->setUltimo_trat($ultimo_trat);
    $novoPaciente->setQuimio($quimio);
    $novoPaciente->setAlergias($alergias);
    $novoPaciente->setLogradouro($logradouro);
    $novoPaciente->setCep($cep);
    $novoPaciente->setNumero($numero);
    $novoPaciente->setBairro($bairro);
    $novoPaciente->setComplemento($complemento);
    $novoPaciente->setCidade($cidade);
    $novoPaciente->setEstado($estado);

    $classPacienteDAO = new ClassPacienteDAO();
    $classPacienteDAO->cadastrar($novoPaciente);

    header('Location: pagePacientes.php');
	
?>
 
