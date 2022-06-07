<?php include ("ClassCarga.php")?>
<?php include ("ClassCargaDAO.php") ?>
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
        <link rel="stylesheet" href="../../public/css/table.css">
        <link rel="stylesheet" href="../../public/css/button-validar.css">

        <style>
            h1{margin-top: 20px;}

            p{text-align: center;}

            .button{text-align: center; margin-top: 70px;}

            .btn-continuar{
                background-color: #3C096C;
                color: #fff;
                padding: 8px 11px;
                border: 1px solid #3C096C;
                border-radius: 4px;
                cursor: pointer;
                font-size: 20px;
                transition: all .3s ease;                
            }

            .btn-continuar:hover {
                background-color: #fff;
                color: #3C096C;
            }
        </style>

    </head>
    <body>
        <main>
            <section>

                <h1> Carga Horária </h1>

                <b> <p style="margin-top: 95px;"> ATENÇÃO! </p> </b>
                <p> Você deve apenas registrar sua carga horária no final do dia de espediente <br>
                    verique o seu horário de chegada no registro presencial e o relate no ponto web.
                </p> 
                
                <div class="button">
                    <a class="btn-continuar" href="pageCarga.php"> Continuar </a>
                </div>
                

            
            </section>

        </main>

        <!--========== MAIN JS ==========-->
        <script src="../../public/scripts/sidebar.js"> </script>
        <script src="../../public/scripts/button-validar.js"></script>

    </div>
    </body>
</html>