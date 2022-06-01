<!-- excluir.php -->
<?php require_once 'ClassPaciente.php'; ?>
<?php require_once 'ClassPacienteDAO.php'; ?>
<?php

   $classPacienteDAO = new ClassPacienteDAO();
   $array = $classPacienteDAO->listar();
 	if (isset($_GET['id'])) {
	
            $id = $_GET['id'];
            $classPacienteDAO = new ClassPacienteDAO();
            $array = $classPacienteDAO->excluir($id);
            if ($array==TRUE) {
                 header('Location: pagePacientes.php');
            }else {
              echo "Erro";
			}
    }
?>
