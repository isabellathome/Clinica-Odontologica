<?php require_once 'ClassConvenio.php'; ?>
<?php require_once 'ClassConvenioDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Editar | Convênios </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form-second.css">       
    </head>

<?php
     $nome   = $_GET['nome'];
     $codigo = $_GET['codigo'];
     $valor = $_GET['valor'];
     $procedimento = $_GET['procedimento'];
     $desconto = $_GET['desconto'];
     $num_contemplados = $_GET['num_contemplados'];
    ?>

    <body>

        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h2> Convênios </h2>

            <div class="container">
                <header> Editar </header>

                    <form action="editar.php" method="GET">
                        <div class="form first">
                            <div class="details personal">
                                <span class="title"> Informações </span>

                                <input type="hidden" name="id" value="<?php echo $id; ?>">                                

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Nome </label>
                                        <input type="text" name="nome" value="<?php echo $nome; ?>">                                        
                                    </div>

                                    <div class="input-field">
                                        <label> Código </label>
                                        <input type="text" name="codigo" value="<?php echo $codigo; ?>">                                        
                                    </div>

                                    <div class="input-field">
                                        <label> Valor (R$) </label>
                                        <input type="text" maxlength="15" name="valor" onkeypress="return(moeda(this,'.',',',event))" value="<?php echo $valor; ?>">                                        
                                    </div>

                                    <div class="input-field">
                                        <label> Procedimento </label>
                                        <input type="text" name="procedimento" value="<?php echo $procedimento; ?>">                                        
                                    </div>

                                    <div class="input-field">
                                        <label> Desconto (%) </label>
                                        <input type="number" name="desconto" value="<?php echo $desconto; ?>">                                        
                                    </div>

                                    <div class="input-field">
                                        <label> Números de Contemplados </label>
                                        <input type="text" name="num_contemplados" value="<?php echo $num_contemplados; ?>">                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="buttons"> 
                                <button class="submit">
                                    <span class="btnText"> Editar </span>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../../public/scripts/validacoes.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>
    
    </body>
</html>