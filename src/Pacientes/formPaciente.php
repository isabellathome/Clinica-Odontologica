<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cadastro | Pacientes </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h2> Pacientes </h2>

                <div class="container">
        <header> Cadastro </header>

                <form action="ControlePaciente.php" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title"> Informações </span>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Nome completo </label>
                                    <input type="text" name="nome" required>
                                </div>

                                <div class="input-field">
                                    <label> CPF </label>
                                    <input type="text" name="cpf">
                                </div>

                                <div class="input-field">
                                    <label> Data de nascimento </label>
                                    <input type="date" name="nascimento">
                                </div>

                                <div class="input-field">
                                    <label> Email </label>
                                    <input type="text" name="email">
                                </div>

                                <div class="input-field">
                                    <label> Número celular </label>
                                    <input type="number" name="celular">
                                </div>

                                <div class="input-field">
                                    <label> Telefone fixo </label>
                                    <input type="text" name="telefone">
                                </div>
                            </div>
                        </div>

                        <div class="details ID">
                            <span class="title"> Anamnese </span>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Último tratamento </label>
                                    <input type="text" name="ultimo_trat">
                                </div>

                                <div class="input-field">
                                    <label> Realiza/realizou quimioterapia? </label>
                                    <input type="text" name="quimio">
                                </div>

                                <div class="input-field">
                                    <label> Possui alergias? Qual? </label>
                                    <input type="text" name="alergias">
                                </div>
                                
                            </div>
                        </div> 
                    
                        <div class="details address">
                            <span class="title">Endereço</span>

                            <div class="fields">
                                <div class="input-field">
                                    <label>Logradouro</label>
                                    <input type="text" name="logradouro">
                                </div>

                                <div class="input-field">
                                    <label>CEP</label>
                                    <input type="text" name="cep">
                                </div>

                                <div class="input-field">
                                    <label>Número</label>
                                    <input type="text" name="numero">
                                </div>

                                <div class="input-field">
                                    <label>Bairro</label>
                                    <input type="text" name="bairro">
                                </div>

                                <div class="input-field">
                                    <label>Complemento</label>
                                    <input type="text" name="complemento">
                                </div>

                                <div class="input-field">
                                    <label>Cidade</label>
                                    <input type="text" name="cidade">
                                </div>

                                <div class="input-field">
                                    <label>Estado</label>
                                    <input type="text" name="estado">
                                </div>
                            </div>
                        </div>
                        
                        <div class="buttons">                                                         
                            <button class="sumbit">
                                <span class="btnText"> Cadastrar </span>
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