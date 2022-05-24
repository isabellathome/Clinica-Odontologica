<?php echo "Entrou na entrada";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$data = $dados['data'];
$hora = $dados['hora'];

echo "$data";
echo "$hora";


?>
