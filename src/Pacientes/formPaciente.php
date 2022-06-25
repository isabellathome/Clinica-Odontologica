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

        <script src="../../public/scripts/validacoes.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>
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
                                    <label> Nome </label>
                                    <input type="text" name="nome" required>
                                </div>

                                <div class="input-field">
                                    <label>CPF</label>
                                    <input oninput="mascara(this)" type="text" name="cpf" maxlength="14" id="input" /><span id="resposta"></span>
                                </div>

                                <div class="input-field">
                                    <label>Data de nascimento</label>
                                    <input type="date" name="nascimento">
                                </div>

                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                </div>

                                <div class="input-field">
                                    <label>Número celular</label>
                                    <input type="text" maxlength="15" class="phone" id="celular" patern="(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})" name="celular">
                                </div>

                                <div class="input-field">
                                    <label>Telefone Fixo</label>
                                    <input type="text" maxlength="15" class="phone" id="telefone" patern="(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})" name="telefone">
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
                                    <label for="logradouro">Logradouro</label>
                                    <input type="text" name="logradouro">
                                </div>

                                <div class="input-field">
                                    <label>CEP</label>
                                    <input name="cep" type="text" id="cep" class="mascCEP" value="" maxlength="9" onblur="pesquisacep(this.value);">
                                </div>

                                <div class="input-field">
                                    <label for="numero">Número</label>
                                    <input type="text" name="numero">
                                </div>

                                <div class="input-field">
                                    <label for="bairro">Bairro</label>
                                    <input name="bairro" type="text" id="bairro">
                                </div>

                                <div class="input-field">
                                    <label for="rua">Rua</label>
                                    <input name="complemento" type="text" id="rua">
                                </div>

                                <div class="input-field">
                                    <label for="cidade">Cidade</label>
                                    <input name="cidade" type="text" id="cidade">
                                </div>

                                <div class="input-field">
                                    <label for="estado">Estado</label>
                                    <input name="estado" type="text" id="uf">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="../../public/scripts/validacoes.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>     
    </body>
</html>