<?php	
    require '../../lib/dompdf/autoload.inc.php';
    require 'config.php';

    use Dompdf\Dompdf;

    $id = $_GET['id'];
    $valor = $_GET['valor'];
    $vencimento = $_GET['vencimento'];
    $parcelas = $_GET['parcelas'];
    $tipo_pagamento = $_GET['tipo_pagamento'];
    $motivo = $_GET['motivo'];
    $autor = $_GET['autor'];
    $status_pag = $_GET['status_pag'];

    $sql = mysqli_query($con, "SELECT * FROM financeiro WHERE id='$id'");
    $financeiro = mysqli_fetch_assoc($sql);

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    ob_start();
    require('report.php');
    $tela = ob_get_contents();
    ob_get_clean();

    $dompdf->loadHtml($tela);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream('Financeiro',
    array(
        "Attachment" => false 
    ));

?>