
<?php require_once 'ClassConvenio.php'; ?>
<?php require_once 'ClassConvenioDAO.php'; ?>
<?php

   $classConvenioDAO = new ClassConvenioDAO();
   $array = $classConvenioDAO->listar();
 	if (isset($_GET['codigo'])) {
	
            $codigo = $_GET['codigo'];
            $classConvenioDAO = new ClassConvenioDAO();
            $array = $classConvenioDAO->excluir($codigo);
            if ($array==TRUE) {
                 header('Location: pageConvenios.php');
            }else {
              echo "Erro";
			}
    }
?>
 

