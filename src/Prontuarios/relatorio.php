<?php	
    require '../../lib/dompdf/autoload.inc.php';
    require 'config.php';

    use Dompdf\Dompdf;

    $id = $_GET['id'];
    $nome_paciente = $_GET['nome_paciente'];
    $data = $_GET['data'];
    $hora = $_GET['hora'];
    $nome_dentista = $_GET['nome_dentista'];
    $procedimento = $_GET['procedimento'];
    $descricao = $_GET['descricao'];
    
    $sql = mysqli_query($con, "SELECT * FROM prontuarios WHERE id='$id'");
    $prontuario = mysqli_fetch_assoc($sql);

    $dompdf = new Dompdf();
    ob_start();
    require('report.php');
    $html = ob_get_contents();
    ob_get_clean();

    $dompdf->loadHtml($html);

    $dompdf->setPaper('A4', 'portrait');

    $dompdf->render();

    $dompdf->stream('Prontuários',
        array(
            "Attachment" => false 
        )
    );

?>