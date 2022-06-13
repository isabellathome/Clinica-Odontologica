<?php require_once 'ClassConsulta.php'; ?>
<?php require_once 'ClassConsultaDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Mensagem para Consulta | SO </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/table.css">
    </head>

    <?php
        $id = $_GET['id'];
        $nome_paciente = $_GET['nome_paciente'];
        $email = $_GET['email'];
        $data_format = $_GET['data'];
        $hora = $_GET['hora'];
        $nome_dentista = $_GET['nome_dentista'];
        $procedimento = $_GET['procedimento'];
        $descricao = $_GET['descricao'];

        $data = date("d-m-Y", strtotime($data_format));
    ?>
    
    <body>
        <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        require '../../lib/vendor/autoload.php';

        $mail = new PHPMailer(true);

        try {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '05c87f29ff7790';
            $mail->Password = '52eb5cc9746b79';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 2525;

            $mail->setFrom('sorrisoodonto@so.com.br', 'Sorriso Odonto');
            $mail->addAddress($email, $nome_paciente);
            
            $mail->isHTML(true);                                 
            $mail->Subject = 'Lembra da sua consulta?';
            $mail->Body = "Olá ".$nome_paciente."! Passando para te lembrar da sua consulta na Clinica Sorriso Odonto. <br> No dia: ".$data." ás ".$hora." horas. <br> Se houver um imprevisto e você não puder comparecer, envie uma mensagem comunicando para o nosso whatsapp. Obrigado! Tenha um excelente dia!";
            $mail->AltBody = "Se houver um imprevisto e você não puder comparecer, envie uma mensagem comunicando para o nosso whatsapp. Obrigado! Tenha um excelente dia!";

            $mail->send();
            
            echo ' <p style="margin-left: 100px"> E-mail enviado com sucesso! <br> <br> <br> <a class="btn-new" href="pageConsultas.php"> Voltar </a> </p>';
            echo '';
        } catch (Exception $e) {
            echo "Erro: E-mail não enviado. Error PHPMailer: {$mail->ErrorInfo}";
            //echo "Erro: E-mail não enviado com sucesso.<br>";
        }
        ?>
    </body>
</html>
