<!-- excluir.php -->
<?php require_once 'ClassFuncionario.php'; ?>
<?php require_once 'ClassFuncionarioDAO.php'; ?>
<?php
   $classFuncionarioDAO = new ClassFuncionarioDAO();
   $array = $classFuncionarioDAO->listar();
 	if (isset($_GET['id'])) {
	
            $id = $_GET['id'];
            $classFuncionarioDAO = new ClassFuncionarioDAO();
            $array = $classFuncionarioDAO->excluir($id);

            $classUsuarioDAO = new ClassFuncionarioDAO();
            $array = $classUsuarioDAO->excluir($id);

            if ($array==TRUE) {
                 header('Location: pageFuncionarios.php');
            }else {
              echo "Erro";
			}
    }
?>
 

