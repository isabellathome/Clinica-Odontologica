<?php require_once 'ClassProntuario.php'; ?>
<?php require_once 'ClassProntuarioDAO.php'; ?>
<?php include ("../session.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Prontuários | SO </title>
        
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
        $nome_paciente = $_GET['nome_paciente'];
        $data_format = $_GET['data'];
        $hora = $_GET['hora'];
        $nome_dentista = $_GET['nome_dentista'];
        $procedimento = $_GET['procedimento'];
        $descricao = $_GET['descricao'];  

        $data = date("d-m-Y", strtotime($data_format));
    ?>
    
    <body>
        <nav class="navbar">        
            <img style="width: 700px; height: 300px; margin-top: -15px" src="../../public/images/header-so2.png" alt="Logo-img">
            
            <h1> Prontuário </h1>
        </nav>

        <table width="100%">
            <tr>
                <td> Nome do paciente: </td>
                <td> <?php echo $nome_paciente; ?> </td>
            </tr>

            <tr>
                <td> Procedimento realizado: </td>
                <td> <?php echo $procedimento; ?> </td>
            </tr>

            <tr>
                <td> Descrição: </td>
                <td> <?php echo $descricao; ?> </td>
            </tr>

            <tr>
                <td> Nome do dentista responsável: </td>
                <td> <?php echo $nome_dentista; ?> </td>
            </tr>            

            <tr>
                <td> Data realizada: </td>
                <td> <?php echo $data; ?> </td>
            </tr>

            <tr>
                <td> Horário realizado: </td>
                <td> <?php echo $hora; ?> </td>
            </tr>
        </table>
    </body>
</html>