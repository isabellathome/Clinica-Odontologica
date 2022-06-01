<!-- alterarProcesso.php -->
<?php require_once 'ClassFinanceiro.php'; ?>
<?php require_once 'ClassFinanceiroDAO.php';?>

<?php
 
    $id = $_GET['id'];
    $valor = $_GET['valor'];
    $vencimento = $_GET['vencimento'];
    $parcelas = $_GET['parcelas'];
    $tipo_pagamento = $_GET['tipo_pagamento'];
    $motivo = $_GET['motivo'];
    $autor = $_GET['autor'];
    $status_pag = $_GET['status_pag'];

    $classFinanceiroDAO = new ClassFinanceiroDAO();
    $array = $classFinanceiroDAO->alterar($id, $valor, $vencimento, $parcelas, $tipo_pagamento, $motivo, $autor, $status_pag);
    
    // echo $array;
    if($array==true) {
        header('Location: pageFinanceiro.php');
    } else {
        echo "Erro";
    }
		
?>
	