<?php include ("ClassCarga.php")?>
<?php include ("ClassCargaDAO.php") ?>
<?php include ("../session.php")?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Carga Horária | Funcionários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/table.css">

    </head>
    <body>

    <?php
    
        $nome_funcionario = $_GET['nome_funcionario'];
        $data = $_GET['data'];
        $hora_entrada = $_GET['hora_entrada'];
        $hora_saida = $_GET['hora_saida'];

        $saida = $hora_saida;
        $entrada = $hora_entrada;
        $semana = 5;
 
	    $diario = gmdate('H:i:s', abs(strtotime($saida) - strtotime($entrada)));
        //$semanal = gmdate('H:i:s', abs( strtotime( $diario )) * 7);

        $semanal = date("H:i:s", strtotime($diario) * $semana);

    ?>

    <main>
            <section>

                <p> Carga Horária </p>

                <?php
                    $classCargaDAO = new ClassCargaDAO();
                    $array= $classCargaDAO->listar();

                    echo "<div class='container'>";
                    echo "<table id='tabela'>";
                    echo "<thead>";
                    echo "  <tr>";
                    echo "      <th> Nome do Funcionário </th> ";
                    echo "      <th> Horário de entrada </th> ";
                    echo "      <th> Horário de saída </th> ";                
                    echo "      <th> Total de horas diária </th> ";
                    echo "      <th> Semanais </th> ";
                    echo "  <tr>";
                    echo "</thead>";

                    foreach ($array as $array) {
                        echo "<tr>";
                        echo "<td>". $array['nome_funcionario']  . "</td>";   
                        echo "<td>". $array['hora_entrada']        . "</td>";
                        echo "<td>". $array['hora_saida'] . "</td>";                  
                        echo "<td>". $diario ." </td>";
                        echo "<td>". $semanal ." </td>";         
                    }            
                ?>
            </section>
    </main>

            <!--========== MAIN JS ==========-->
            <script src="../../public/scripts/sidebar.js"> </script>
    </body>
</html>