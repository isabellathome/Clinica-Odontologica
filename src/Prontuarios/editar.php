<?php require_once 'ClassProntuario.php'; ?>
<?php require_once 'ClassProntuarioDAO.php';?>

<?php
 
    $id = $_GET['id'];
    $nome_paciente = $_GET['nome_paciente'];
    $nome_dentista = $_GET['nome_dentista'];
    $procedimento = $_GET['procedimento'];
    $descricao = $_GET['descricao'];
    $data = $_GET['data'];
    $hora = $_GET['hora'];    
    
    $classProntuarioDAO = new ClassProntuarioDAO();
    $array = $classProntuarioDAO->alterar($id, $nome_paciente, $nome_dentista, $procedimento, $descricao, $data, $hora);

    if($array==true) {
        header('Location: pageProntuarios.php');
    } else {
        echo "Erro";
    }
		
?>
	