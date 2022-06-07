<?php require_once 'ClassFinanceiro.php'; ?>
<?php require_once 'ClassFinanceiroDAO.php'; ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Financeiro | SO </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="../../public/css/index.css">

        <style>
            td {font-size: 18px;}

            td:nth-child(even) {margin-left: 35px;}
        </style>
    </head>

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
    
    <body>
        <nav class="navbar">        
            <img style="width: 700px; height: 300px; margin-top: -15px" src="../../public/images/header-so3.png" alt="Logo-img">
            
            <h1> Financeiro </h1>
        </nav>

        <table width="100%">
            <tr>
                <td> Valor: </td>
                <td> <?php echo $valor; ?> </td>
            </tr>

            <tr>
                <td> Vencimento: </td>
                <td> <?php echo $vencimento; ?> </td>
            </tr>

            <tr>
                <td> Parcelas: </td>
                <td> <?php echo $parcelas; ?> </td>
            </tr>

            <tr>
                <td> Tipo de pagamento: </td>
                <td> <?php echo $tipo_pagamento; ?> </td>
            </tr>            

            <tr>
                <td> Motivo: </td>
                <td> <?php echo $motivo; ?> </td>
            </tr>

            <tr>
                <td> Autor: </td>
                <td> <?php echo $autor; ?> </td>
            </tr>

            <tr>
                <td> Status do pagamento: </td>
                <td> <?php echo $status_pag; ?> </td>
            </tr>
        </table>
    </body>
</html>