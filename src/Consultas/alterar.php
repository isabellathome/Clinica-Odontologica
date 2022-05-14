<!-- alterar.php -->
<?php require_once 'ClassUsuario.php'; ?>
<?php require_once 'ClassUsuarioDAO.php';?>

<?php
$matricula =$_GET['matricula']; 
$nome      =$_GET['nome'];
?>
     <form action="AlterarProcessa.php" method="GET" >
          <h1>ALTERAR DADOS</h1>
		   Matrícula:
           <input type="text" name="matricula" value=<?php echo $matricula;?>>
           Nome:
           <input type="text" name="nome"      value=<?php echo $nome;?> >
         
		 <input type="submit" value="ALTERAR" />
         
    </form>