<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cadastro | Financeiro </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form.css">
        
    </head>
    <body>
        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h2> Financeiro </h2>

    <div class="container">
        <header> Cadastro </header>

                <form action="ControleFinanceiro.php" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title"> Informações </span>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Valor </label>
                                    <input type="text" name="valor" required>
                                </div>

                                <div class="input-field">
                                    <label> Vencimento </label>
                                    <input type="date" name="vencimento">
                                </div>

                                <div class="input-field">
                                    <label> Parcelas </label>
                                    <input type="number" name="parcelas">
                                </div>

                                <div class="input-field">
                                    <label> Tipo de pagamento </label>
                                    <input type="text" name="tipo_pagamento">
                                </div>

                                <div class="input-field">
                                    <label> Motivo </label>
                                    <input type="text" name="motivo">
                                </div>

                                <div class="input-field">
                                    <label> Autor </label>
                                    <input type="text" name="autor">
                                </div>

                                <div class="input-field">
                                    <label> Status </label>
                                    <input type="text" name="status_pag">
                                </div>
                            </div>
                        </div>

                        <div class="buttons">                                                         
                            <button class="submit">
                                <span class="btnText"> Cadastrar </span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </section>
        </main>

        <!--========== MAIN JS ==========-->
        <script src="../../public/scripts/sidebar.js"> </script>      
    </body>
</html>