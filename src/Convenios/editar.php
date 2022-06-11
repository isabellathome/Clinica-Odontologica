
<?php require_once 'ClassConvenio.php'; ?>
<?php require_once 'ClassConvenioDAO.php';?>

<?php
 
    $id   = $_GET['id'];
    $nome   = $_GET['nome'];
    $codigo = $_GET['codigo'];
    $valor = $_GET['valor'];
    $procedimento = $_GET['procedimento'];
    $desconto = $_GET['desconto'];
    $num_contemplados = $_GET['num_contemplados'];
    
    $classConvenioDAO = new ClassConvenioDAO();
    $array = $classConvenioDAO->alterar($id, $nome, $codigo, $valor, $procedimento, $desconto, $num_contemplados);

     /*echo $array;*/
    if($array==true) {
        header('Location: pageConvenios.php');
    } else {
        echo "Erro";
    }
		
?>
	