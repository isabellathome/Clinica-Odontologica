<?php require_once 'ClassConsulta.php'; ?>
<?php require_once 'ClassConsultaDAO.php'; ?>
<?php

   $classConsultaDAO = new ClassConsultaDAO();
   $array = $classConsultaDAO->listar();
 	if (isset($_GET['id'])) {
	
            $id = $_GET['id'];
            $classConsultaDAO = new ClassConsultaDAO();
            $array = $classConsultaDAO->excluir($id);
            if ($array==TRUE) {
                 header('Location: pageConsultas.php');
            }else {
              echo "Erro";
			}
    }
?>