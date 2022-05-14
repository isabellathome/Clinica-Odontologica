<!--  ControleUsuario.php -->
<?php require_once "ClassUsuario.php" ?> <!-- tem os metodos get e set -->
<?php require_once "ClassUsuarioDAO.php" ?> <!-- tem o metodo cadastrar -->

<?php

    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];

    $novoUsuario = new ClassUsuario(); // Forma de proteger os dados: GET() e SET(atribuir)

    $novoUsuario->setMatricula($matricula);
    $novoUsuario->setNome($nome);

    $classUsuarioDAO = new ClassUsuarioDAO();
    $classUsuarioDAO->cadastrar($novoUsuario);

    header('Location:listar.php');
	
?>
 
