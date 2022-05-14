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

<!-- index.php -->
<html>
    <head>
        <meta charset="UTF-8">
	
    </head>
    <body style="background-image:url('imagem/praia.jpg');">
	 <center>
	  <div style="background-color:yellow; width:200px;opacity:0.7;">
        <form action="ControleUsuario.php" method="POST" >
          <h1>Formulário</h1>
		   Matrícula:<br>
           <input type="text" name="matricula" />
		   <br>
           Nome:
		   <br>
           <input type="text" name="nome">
		   <br> <br>
         <input type="submit" value="Cadastrar"/>
         <input type="reset" value="Apagar" />
       </form>
	   <br>
	   </div>
	</center>
    </body>
</html>