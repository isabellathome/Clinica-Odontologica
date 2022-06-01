<!-- excluir.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php'; ?>
<?php
   $classUsuarioDAO = new ClassUsuarioDAO();
   $array = $classUsuarioDAO->listar();
 	if (isset($_GET['matricula'])) {
	
            $matricula = $_GET['matricula'];
            $classUsuarioDAO = new ClassUsuarioDAO();
            $array = $classUsuarioDAO->excluir($matricula);
            if ($array==TRUE) {
                 header('Location:listar.php');
            }else {
              echo "Erro";
			}
    }
?>
 

