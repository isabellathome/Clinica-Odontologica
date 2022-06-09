<?php require_once 'ClassConsulta.php'; ?>
<?php require_once 'ClassConsultaDAO.php';?>

<?php
 
    $id = $_GET['id'];
    $nome_paciente = $_GET['nome_paciente'];
    $data = $_GET['data'];
    $hora = $_GET['hora'];
    $nome_dentista = $_GET['nome_dentista'];
    $procedimento = $_GET['procedimento'];
    $descricao = $_GET['descricao'];
    
    $classConsultaDAO = new ClassConsultaDAO();
    $array = $classConsultaDAO->alterar($id, $nome_paciente, $email, $data, $hora, $nome_dentista, $procedimento, $descricao);

    if($array==true) {
        header('Location: pageConsultas.php');
    } else {
        echo "Erro";
    }
		
?>
	