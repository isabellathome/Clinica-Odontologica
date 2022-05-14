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