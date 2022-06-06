
<?php require_once "ClassCarga.php" ?> 
<?php require_once "ClassCargaDAO.php" ?> 

<?php

    $nome_funcionario = $_POST['nome_funcionario'];
    $data_entrada = $_POST['data_entrada'];
    $hora_entrada = $_POST['hora_entrada'];

    $novoCargaE = new ClassCarga(); 

    $novoCargaE->setNome_funcionario($nome_funcionario);
    $novoCargaE->setData_entrada($data_entrada);
    $novoCargaE->setHora_entrada($hora_entrada);

    $classCargaDAO = new ClassCargaDAO();
    $classCargaDAO->cadastrarEntrada($novoCargaE);

    header('Location: Entrada.php');
	
?>
 
