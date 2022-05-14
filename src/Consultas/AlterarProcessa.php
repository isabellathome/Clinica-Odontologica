<?php include ("../src/session.php") ?>
<?php include ("../src/components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Funcionários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../public/css/sidebar.css">
        <link rel="stylesheet" type="text/css" href="../public/css/table.css">

        <script src="components/sweetalert.js"></script>
        <script src="components/sweetalert2.all.min.js"></script>
    </head>
    <body>

<!-- alterarProcesso.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php';?>

<?php
 
    $matricula = $_GET["matricula"];
    $nome = $_GET["nome"];
    
    $classUsuariaDAO = new ClassUsuarioDAO();
    $array = $classUsuariaDAO->alterar($matricula, $nome);

    // echo $array;
    if($array==true) {
        header('Location:listar.php');
    } else {
        echo "Erro";
    }
		
?>
	