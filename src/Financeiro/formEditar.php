<?php
    session_start();
    ob_start();
    include_once "../ConexaoBD.php";

    if((!isset($_SESSION['id'])) AND (!isset($_SESSION['funcao']))){
        $_SESSION['msg'] = "<p style='color: #ff0000; margin-bottom: 45px'>Erro: Necessário realizar o login para acessar a página!</p>";
        header("Location: ../pageLogin.php");
    }
?>

<?php include ("../components/header.php") ?>
<?php require_once 'ClassFinanceiro.php'; ?>
<?php require_once 'ClassFinanceiroDAO.php';?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Editar | Financeiro </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form-second.css">     
        
        <script src="../../public/scripts/validacoes.js"></script>
    </head>

    <body>

    <?php
        $id = $_GET['id'];
        $valor = $_GET['valor'];
        $vencimento = $_GET['vencimento'];
        $parcelas = $_GET['parcelas'];
        $tipo_pagamento = $_GET['tipo_pagamento'];
        $motivo = $_GET['motivo'];
        $autor = $_GET['autor'];
        $status_pag = $_GET['status_pag'];
    ?>

 <!--========== CONTENTS ==========-->
     <main>
            <section>
                <h2> Financeiro </h2>

            <div class="container">
                <header> Editar </header>

                    <form action="editar.php">
                        <div class="form first">
                            <div class="details personal">
                                <span class="title"> Informações </span>

                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <!--  -->

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Valor </label>
                                        <input type="text" maxlength="15" name="valor" onkeypress="return(moeda(this,'.',',',event))" value="<?php echo $valor; ?>">
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label> Vencimento </label>
                                        <input type="date" name="vencimento" value="<?php echo $vencimento; ?>">
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label> Parcelas </label>
                                        <input type="number" name="parcelas" value="<?php echo $parcelas; ?>">
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label> Tipo de Pagamento </label>
                                        <input type="text" name="tipo_pagamento" value="<?php echo $tipo_pagamento; ?>">
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label> Motivo </label>
                                        <input type="text" name="motivo" value="<?php echo $motivo; ?>">
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label> Autor </label>
                                        <input type="text" name="autor" value="<?php echo $autor; ?>">
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label> Status </label>
                                        <input type="text" name="status_pag" value="<?php echo $status_pag; ?>">
                                        <!--  -->
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
    </body>
</html>