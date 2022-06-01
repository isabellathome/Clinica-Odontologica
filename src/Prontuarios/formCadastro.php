<?php include ("../session.php") ?>
<?php include ("../conexao.php") ?>
<?php include ("../components/header.php") ?>
<?php include ("../ConexaoBD.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Prontuários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/form.css">

    </head>
    <body>

    <!--========== CONTENTS ==========-->
    <main>
        <section>
            <h2> Prontuários </h2>

    <div class="container" style="width: 900px; margin-left: 175px; min-height: 290px;">
        <header> Cadastro </header>

                <form action="ControleProntuario.php" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title"> Informações </span>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Nome do Paciente </label>
                                    <select name="nome_paciente">
                                        <option>Selecione</option>
                                        <?php
                                            $result_pacientes = "SELECT * FROM pacientes";
                                            $resultado_paciente = mysqli_query($conexao, $result_pacientes);

                                            while($row_pacientes = mysqli_fetch_assoc($resultado_paciente)){ ?>
                                                <option value="<?php echo $row_pacientes['nome']; ?>"><?php echo $row_pacientes['nome']; ?></option> <?php
                                            }
                                        ?>   
				                    </select>
                                </div>

                                <div class="input-field">
                                    <label> Nome do Dentista </label>
                                    <select name="nome_dentista">
                                        <option>Selecione</option>
                                        <?php
                                            $result_dentistas = "SELECT * FROM funcionarios WHERE funcao = 'dentista'";
                                            $resultado_dentista = mysqli_query($conexao, $result_dentistas);

                                            while($row_dentistas = mysqli_fetch_assoc($resultado_dentista)){ ?>
                                                <option value="<?php echo $row_dentistas['nome']; ?>"><?php echo $row_dentistas['nome']; ?></option> <?php
                                            }
                                        ?>   
				                    </select>
                                </div>

                                <div class="input-field">
                                    <label> Procedimento </label>
                                    <select name="procedimento">
                                        <option>Selecione</option>
                                        <?php
                                            $result_dentistas = "SELECT * FROM consultas";
                                            $resultado_dentista = mysqli_query($conexao, $result_dentistas);

                                            while($row_dentistas = mysqli_fetch_assoc($resultado_dentista)){ ?>
                                                <option value="<?php echo $row_dentistas['procedimento']; ?>"><?php echo $row_dentistas['procedimento']; ?></option> <?php
                                            }
                                        ?>   
				                    </select>
                                </div>

                                <div class="input-field">
                                    <label> Descrição </label>
                                    <input type="text" name="descricao">
                                </div>

                                <div class="input-field">
                                    <label> Data </label>
                                    <select name="data">
                                        <option>Selecione</option>
                                        <?php
                                            $result_dentistas = "SELECT * FROM consultas";
                                            $resultado_dentista = mysqli_query($conexao, $result_dentistas);

                                            while($row_dentistas = mysqli_fetch_assoc($resultado_dentista)){ ?>
                                                <option value="<?php echo $row_dentistas['data']; ?>"><?php echo $row_dentistas['data']; ?></option> <?php
                                            }
                                        ?>   
				                    </select>
                                </div>

                                <div class="input-field">
                                    <label> Hora </label>
                                    <select name="hora">
                                        <option>Selecione</option>
                                        <?php
                                            $result_dentistas = "SELECT * FROM consultas";
                                            $resultado_dentista = mysqli_query($conexao, $result_dentistas);

                                            while($row_dentistas = mysqli_fetch_assoc($resultado_dentista)){ ?>
                                                <option value="<?php echo $row_dentistas['hora']; ?>"><?php echo $row_dentistas['hora']; ?></option> <?php
                                            }
                                        ?>   
				                    </select>
                                </div>
                            </div>
                        </div>

                        
                        <div class="buttons">                                                         
                            <button class="submit">
                                <span class="btnText"> Registrar </span>
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