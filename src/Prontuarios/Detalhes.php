<?php require_once 'ClassProntuario.php'; ?>
<?php require_once 'ClassProntuarioDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Visualizar | Prontuários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form.css">       
    </head>

<?php
    $id = $_GET['id'];
    $nome_paciente = $_GET['nome_paciente'];
    $nome_dentista = $_GET['nome_dentista'];
    $procedimento = $_GET['procedimento'];
    $descricao = $_GET['descricao'];
    $data = $_GET['data'];
    $hora = $_GET['hora'];    
?>

    <body>

        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h2> Prontuários </h2>

            <div class="container">
                <header> Visualizar </header>

                    <form action="pageProntuarios.php" method="GET">
                    <div class="form first">
                            <div class="details personal">
                                <span class="title"> Informações </span>

                                <input type="hidden" name="id" value="<?php echo $id; ?>" disabled>

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Nome do Paciente </label>
                                        <input type="text" name="nome" value="<?php echo $nome_paciente; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Nome do Dentista </label>
                                        <input type="text" name="nome_dentista" value="<?php echo $nome_dentista; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label>Número procedimento</label>
                                        <input type="text" name="procedimento" value="<?php echo $procedimento; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Descrição </label>
                                        <input type="text" name="descricao" value="<?php echo $descricao; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label> Data </label>
                                        <input type="date" name="data" value="<?php echo $data; ?>" disabled>
                                    </div>

                                    <div class="input-field">
                                        <label>Hora</label>
                                        <input type="time" name="hora" value="<?php echo $hora; ?>" disabled>
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