<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cadastro | Convênios </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form.css">
        
    </head>
    <body>
        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h2> Convênios </h2>

    <div class="container">
        <header> Cadastro </header>

                <form action="ControleConvenio.php" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title"> Informações </span>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Nome </label>
                                    <input type="text" name="nome" required>
                                </div>

                                <div class="input-field">
                                    <label> Código </label>
                                    <input type="text" name="codigo">
                                </div>

                                <div class="input-field">
                                    <label> Valor </label>
                                    <input type="number" name="valor">
                                </div>

                                <div class="input-field">
                                    <label> Procedimento </label>
                                    <input type="text" name="procedimento">
                                </div>

                                <div class="input-field">
                                    <label> Desconto </label>
                                    <input type="number" name="desconto">
                                </div>

                                <div class="input-field">
                                    <label> Número de Contemplados </label>
                                    <input type="number" name="num_contemplados">
                                </div>
                            </div>
                        </div>

                        
                        <div class="buttons">                                                         
                            <button class="sumbit">
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