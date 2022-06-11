<?php
    session_start();
    ob_start();
    include_once "../ConexaoBD.php";

    if((!isset($_SESSION['id'])) AND (!isset($_SESSION['funcao']))){
        $_SESSION['msg'] = "<p style='color: #ff0000; margin-bottom: 45px'>Erro: Necessário realizar o login para acessar a página!</p>";
        header("Location: ../pagelogin.php");
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
        <title> Visualizar | Financeiro </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form.css">       
    </head>

    <body>

    <?php
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
                <header> Visualizar </header>

                    <form action="pageFinanceiro.php">
                        <div class="form first">
                            <div class="details personal">
                                <span class="title"> Informações </span>

                                <input type="hidden" name="id" value="<?php echo $id; ?>" disabled>

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Valor </label>
                                        <input type="text" name="valor" value="<?php echo $valor; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Vencimento </label>
                                        <input type="date" name="vencimento" value="<?php echo $vencimento; ?>" disabled>  
                                    </div>

                                    <div class="input-field">
                                        <label> Parcelas </label>
                                        <input type="number" name="parcelas" value="<?php echo $parcelas; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Tipo de Pagamento </label>
                                        <input type="text" name="tipo_pagamento" value="<?php echo $tipo_pagamento; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Motivo </label>
                                        <input type="text" name="motivo" value="<?php echo $motivo; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Autor </label>
                                        <input type="text" name="autor" value="<?php echo $autor; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Status </label>
                                        <input type="text" name="status_pag" value="<?php echo $status_pag; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="buttons">       

                                <button class="sumbit">
                                    <a href="pageFuncionarios.php" >
                                        <span class="btnText"> Voltar </span>
                                        <i class="uil uil-navigator"></i>
                                    </a>
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