
<?php require_once "ClassCarga.php" ?> 
<?php require_once "ClassCargaDAO.php" ?> 

<?php

    $nome_funcionario = $_POST['nome_funcionario'];
    $data = $_POST['data'];
    $hora_entrada = $_POST['hora_entrada'];
    $hora_saida = $_POST['hora_saida'];

    $novaCarga = new ClassCarga(); 

    $novaCarga->setNome_funcionario($nome_funcionario);
    $novaCarga->setData($data);
    $novaCarga->setHora_entrada($hora_entrada);
    $novaCarga->setHora_saida($hora_saida);

    $classCargaDAO = new ClassCargaDAO();
    $classCargaDAO->cadastrar($novaCarga);

    header('Location: Entrada.php');
	
?>
 
