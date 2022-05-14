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

<!--  listar.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php'; ?>

<body style="background-image:url('imagem/praia.jpg')">

<?php
    $classUsuarioDAO = new ClassUsuarioDAO();
    $array= $classUsuarioDAO->listar();
    echo "<center>";
    echo "<center><h3>RESULTADO DO CADASTRO</h3></center>";
    echo "<table border=1  bgcolor=LightSkyBlue>";
    echo "  <tr>";
    echo "      <th scope='col'><p align='center'>Matrícula</p></th> ";
    echo "      <th scope='col'><p align='center'>Nome</p></th> ";
    echo "      <th scope='col'><p align='center'>Excluir</p></th> ";
    echo "      <th scope='col'><p align='center'>Alterar</p></th>";
    echo "  <tr>";

    foreach ($array as $array) {
        echo "<tr>";
		echo "<td >". $array['matricula'] . "</td>";
        echo "<td >". $array['nome']      . "</td>";	   
		echo "<td> ";

        ?>
           <form action="excluir.php" method="get">
				 <input type=hidden value= <?php echo $array['matricula'];?> name=matricula>
				 <button><img src='imagem/excluir.png' width=30px height=30px></button></td>
			</form> 		  
        <?php	
		echo "</td> ";
		echo  "<td> "; 
		 ?>
           <form action="alterar.php" method="get">
				 <input type=hidden value= <?php echo $array['matricula'];?> name=matricula>
				 <input type=hidden value= <?php echo $array['nome'];?> name=nome>
				 <button><img src='imagem/alterar.png' width=30px height=30px></button></td>
		   </form> 		  
        <?php	
		 echo "</td> ";
		echo "</tr>";		      
    }
	echo "</center>";
?>
<div>
<a href="index.php"><img src='imagem/cadastrar.jpg' width=40px height=40px></a><br>
</body>