<?php

session_start();
ob_start();
unset($_SESSION['id'], $_SESSION['funcao']);
$_SESSION['msg'] = "<p style='color: green; margin-bottom: 45px'> Deslogado com sucesso! </p>";

header("Location: pageLogin.php");