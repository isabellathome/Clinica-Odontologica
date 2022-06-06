<?php include ("../session.php")?>
<?php include ("../components/header-second.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Carga Horária | Funcionários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/carga.css">

    </head>
    <body>

        <?php
            date_default_timezone_set('America/Sao_Paulo');
            $hora = date('H:i:s');        
        ?>

        <!--========== CONTENTS ==========-->
        <div class="container">
            <header> Carga Horária </header>

            <p style="margin-top: 100px;"> Carga horária registrada com sucesso!</p>
                
        </div>

        <!--========== MAIN JS ==========-->
        <script src="../../public/scripts/sidebar.js"> </script> 
        <script src="../../public/scripts/validar.js"> </script>     
    </body>
</html>