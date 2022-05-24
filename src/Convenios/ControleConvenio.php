<!--  ControleUsuario.php -->
<?php require_once "ClassConvenio.php" ?> <!-- tem os metodos get e set -->
<?php require_once "ClassConvenioDAO.php" ?> <!-- tem o metodo cadastrar -->

<?php

    $nome = $_POST['nome'];
    $codigo = $_POST['codigo'];
    $valor = $_POST['valor'];
    $procedimento = $_POST['procedimento'];
    $desconto = $_POST['desconto'];
    $num_contemplados = $_POST['num_contemplados'];

    $novoConvenio = new ClassConvenio(); // Forma de proteger os dados: GET() e SET(atribuir)

    $novoConvenio->setNome($nome);
    $novoConvenio->setCodigo($codigo);
    $novoConvenio->setValor($valor);
    $novoConvenio->setProcedimento($procedimento);
    $novoConvenio->setDesconto($desconto);
    $novoConvenio->setNum_contemplados($num_contemplados);

    $classConvenioDAO = new ClassConvenioDAO();
    $classConvenioDAO->cadastrar($novoConvenio);

    header('Location: pageConvenios.php');
	
?>
 
