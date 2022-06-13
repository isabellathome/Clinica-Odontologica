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
        <link rel="stylesheet" href="../../public/css/form-second.css">

    </head>
    <body>

    <?php
    
        $nome_funcionario = $_GET['nome_funcionario'];
        $data = $_GET['data'];
        $hora_entrada = $_GET['hora_entrada'];
        $hora_saida = $_GET['hora_saida'];

        $saida = $hora_saida;
        $entrada = $hora_entrada;
 
	    $diario = gmdate('H:i:s', abs(strtotime($saida) - strtotime($entrada)));

    ?>

        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h2> Carga Horária </h2>

            <div class="container">
                <header> Visualizar </header>

                    <form action="pageValidar.php" method="POST">
                    <div class="form first">
                            <div class="details personal">
                                <span class="title"> Informações </span>

                                <input type="hidden" name="id" value="<?php echo $id; ?>" disabled>

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Nome do Funcionário </label>
                                        <input type="text" name="nome" value="<?php echo $nome_funcionario; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Data </label>
                                        <input type="date" name="data" value="<?php echo $data; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Hora de Entrada </label>
                                        <input type="time" name="hora_entrada" value="<?php echo $hora_entrada; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Hora de Saída </label>
                                        <input type="time" name="hora_saida" value="<?php echo $hora_saida; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Total de Horas Diárias </label>
                                        <input type="text" name="diario" value="<?php echo $diario; ?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="buttons">
                                <button class="submit">
                                    <span class="btnText"> Voltar </span>
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