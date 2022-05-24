<?php include ("../session.php")?>
<?php include ("../components/header.php") ?>

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

                <!-- <div class="wrapper">
                    <input type="radio" value="entrada" name="select" id="option-1" onclick="Carga(this.value);">
                    <input type="radio" value="saida" name="select" id="option-2" onclick="Carga(this.value);">
                    
                    <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                        <span>Entrada</span>
                    </label>

                    <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                        <span>Saída</span>
                    </label>

                </div> -->

        <!-- <div id="entrada" style="display: none;"> -->
            <form class="carga" action="Entrada.php" method="post">
                <div class="details personal">
                    <span class="title"> Informações do funcionário X </span>
                    <p> Entrada </p>

                        <div class="fields">
                            <div class="input-field">
                                <label> Data </label>
                                <input type="date"  id="data" name="data" value='<?php echo date("Y-m-d"); ?>' disabled>
                            </div>                            

                            <div class="input-field">
                                <label> Hora </label>
                                <input type="time" name="hora" value='<?php echo $hora; ?>' disabled>
                            </div>

                            <div class="input-field">
                                <label> Validar </label>
                                <input type="submit" name="hora" value="Validar" style="background-color: green; color: white;">
                            </div>
                        </div>

                        <p> Saída </p>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Data </label>
                                    <input type="date"  id="data" name="data" value='<?php echo date("Y-m-d"); ?>' disabled>
                                </div>                            

                                <div class="input-field">
                                    <label> Hora </label>
                                    <input type="time" name="hora" value='<?php echo $hora; ?>' disabled>
                                </div>

                                <div class="input-field">
                                    <label> Validar </label>
                                    <input type="submit" name="hora" value="Validar" style="background-color: green; color: white;">
                                </div>
                            </div>
                </div>
                <!-- <div class="buttons">                                                         
                    <button class="sumbit">
                        <span class="btnText"> Enviar </span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> -->
            </form>
        <!-- </div> -->

        <hr>
               
        <!-- <div id="saida" style="display: none;"> -->
            <form action="Saida.php" method="post">
                <div class="details personal">
                    <span class="title"> Informações do funcionário Y </span>

                    <p> Entrada </p>

                        <div class="fields">
                            <div class="input-field">
                                <label> Data </label>
                                <input type="date"  id="hora" name="data" value='<?php echo date("Y-m-d"); ?>' disabled>
                            </div>                            

                            <div class="input-field">
                                <label> Hora </label>
                                <input type="time" name="hora" value='<?php echo $hora; ?>' disabled>
                            </div>

                            <div class="input-field">
                                <label> Validar </label>
                                <input type="submit" class="validar" name="hora" value="Validar" style="background-color: green; color: white;">
                            </div>
                        </div>

                    <p> Saída </p>

                        <div class="fields">
                            <div class="input-field">
                                <label> Data </label>
                                <input type="date"  id="data" name="data" value='<?php echo date("Y-m-d"); ?>' disabled>
                            </div>                            

                            <div class="input-field">
                                <label> Hora </label>
                                <input type="time" name="hora" value='<?php echo $hora; ?>' disabled>
                            </div>

                            <div class="input-field">
                                <label> Validar </label>
                                <input type="submit" name="hora" value="Validar" style="background-color: green; color: white;">
                            </div>
                        </div>
                </div>

                <!-- <div class="buttons">                                                         
                    <button class="sumbit" id="botao">
                        <span class="btnText"> Enviar </span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> -->
            </form>
        <!-- </div> -->
    </div>

        <!--========== MAIN JS ==========-->
        <script src="../../public/scripts/sidebar.js"> </script> 
        <script src="../../public/scripts/validar.js"> </script>     
    </body>
</html>