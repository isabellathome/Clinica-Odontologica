<!-- alterarProcesso.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php';?>

<?php
 
    $matricula = $_GET["matricula"];
    $nome = $_GET["nome"];
    
    $classUsuariaDAO = new ClassUsuarioDAO();
    $array = $classUsuariaDAO->alterar($matricula, $nome);

    // echo $array;
    if($array==true) {
        header('Location:listar.php');
    } else {
        echo "Erro";
    }
		
?>
	