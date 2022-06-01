<!--  ControleFuncionario.php -->
<?php require_once "ClassFinanceiro.php" ?> <!-- tem os metodos get e set -->
<?php require_once "ClassFinanceiroDAO.php" ?> <!-- tem o metodo cadastrar -->

<?php

    $valor = $_POST['valor'];
    $vencimento = $_POST['vencimento'];
    $parcelas = $_POST['parcelas'];
    $tipo_pagamento = $_POST['tipo_pagamento'];
    $motivo = $_POST['motivo'];
    $autor = $_POST['autor'];
    $status_pag = $_POST['status_pag'];

    $novoFinanceiro = new ClassFinanceiro(); // Forma de proteger os dados: GET() e SET(atribuir)

    $novoFinanceiro->setValor($valor);
    $novoFinanceiro->setVencimento($vencimento);
    $novoFinanceiro->setParcelas($parcelas);
    $novoFinanceiro->setTipo_pagamento($tipo_pagamento);
    $novoFinanceiro->setMotivo($motivo);
    $novoFinanceiro->setAutor($autor);
    $novoFinanceiro->setStatus_pag($status_pag);

    $classFinanceiroDAO = new ClassFinanceiroDAO();
    $classFinanceiroDAO->cadastrar($novoFinanceiro);

    header('Location: pageFinanceiro.php');
	
?>
 
