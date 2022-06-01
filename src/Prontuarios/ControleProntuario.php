
<?php require_once "ClassProntuario.php" ?> 
<?php require_once "ClassProntuarioDAO.php" ?> 

<?php
    
    $nome_paciente = $_POST['nome_paciente'];
    $nome_dentista = $_POST['nome_dentista'];
    $procedimento = $_POST['procedimento'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];    

    $novoProntuario = new ClassProntuario();

    $novoProntuario->setNome_paciente($nome_paciente);
    $novoProntuario->setNome_dentista($nome_dentista);
    $novoProntuario->setProcedimento($procedimento);
    $novoProntuario->setDescricao($descricao);
    $novoProntuario->setData($data);
    $novoProntuario->setHora($hora);    

    $classProntuarioDAO = new ClassProntuarioDAO();
    $classProntuarioDAO->cadastrar($novoProntuario);

    header('Location: pageProntuarios.php');
	
?>
 
