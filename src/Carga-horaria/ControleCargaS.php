
<?php require_once "ClassCarga.php" ?> 
<?php require_once "ClassCargaDAO.php" ?> 

<?php

    $nome_funcionario = $_POST['nome_funcionario'];
    $data_saida = $_POST['data_saida'];
    $hora_saida = $_POST['hora_saida'];

    $novoCargaS = new ClassCarga(); 

    $novoCargaS->setNome_funcionario($nome_funcionario);
    $novoCargaS->setData_saida($data_saida);
    $novoCargaS->setHora_saida($hora_saida);

    $classCargaDAO = new ClassCargaDAO();
    $classCargaDAO->cadastrarSaida($novoCargaS);

    header('Location: Entrada.php');
	
?>
 
