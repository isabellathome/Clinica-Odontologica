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

            <form class="carga" action="ControleCarga.php" method="post">
                <div class="details personal">
                    <span class="title"> Informações </span>

                        <div class="fields">
                            <div class="input-field">
                                <label> Confirme seu nome </label>
                                <input type="text"  id="nome_funcionario" name="nome_funcionario">
                            </div>

                            <div class="input-field">
                                <label> Data </label>
                                <input type="date"  id="data" name="data" value='<?php echo date("Y-m-d"); ?>'>
                            </div>                            

                            <div class="input-field">
                                <label> Hora de entrada </label>
                                <input type="time" name="hora_entrada">
                            </div>

                            <div class="input-field">
                                <label> Hora de saída </label>
                                <input type="time" name="hora_saida" value='<?php echo $hora; ?>'>
                            </div>
                        </div>
                </div>

                <div class="buttons">                                                         
                    <button class="sumbit">
                        <span class="btnText"> Enviar </span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </form>
        </div>

        <!--========== MAIN JS ==========-->
        <script src="../../public/scripts/sidebar.js"> </script>     
    </body>
</html>