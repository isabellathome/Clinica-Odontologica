
<?php require_once "ClassConsulta.php" ?> 
<?php require_once "ClassConsultaDAO.php" ?> 

<?php
    
    $nome_paciente = $_POST['nome_paciente'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $nome_dentista = $_POST['nome_dentista'];
    $procedimento = $_POST['procedimento'];
    $descricao = $_POST['descricao'];

    $novaConsulta = new ClassConsulta();

    $novaConsulta->setNome_paciente($nome_paciente);
    $novaConsulta->setData($data);
    $novaConsulta->setHora($hora);
    $novaConsulta->setNome_dentista($nome_dentista);
    $novaConsulta->setProcedimento($procedimento);
    $novaConsulta->setDescricao($descricao);

    $classConsultaDAO = new ClassConsultaDAO();
    $classConsultaDAO->cadastrar($novaConsulta);

    header('Location: pageConsultas.php');
	
?>
 
