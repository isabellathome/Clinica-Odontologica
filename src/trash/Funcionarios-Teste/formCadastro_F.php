<?php
    session_start();
    ob_start();
    include_once "../conexao.php";

    if((!isset($_SESSION['id'])) AND (!isset($_SESSION['funcao']))){
        $_SESSION['msg'] = "<p style='color: #ff0000; margin-bottom: 45px'>Erro: Necessário realizar o login para acessar a página!</p>";
        header("Location: ../pagelogin.php");
    }
?>

<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cadastro | Funcionários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form.css">
        
    </head>
    <body>
        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h2> Funcionários </h2>

    <div class="container">
        <header> Cadastro </header>

                <form action="cadastrarF.php" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title"> Informações </span>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Nome completo </label>
                                    <input type="text" name="nome" required>
                                </div>

                                <div class="input-field">
                                    <label>CPF</label>
                                    <input type="text" name="cpf">
                                </div>

                                <div class="input-field">
                                    <label>Data de nascimento</label>
                                    <input type="date" name="nascimento">
                                </div>

                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="text" name="email">
                                </div>

                                <div class="input-field">
                                    <label>Número celular</label>
                                    <input type="number" name="celular">
                                </div>

                                <div class="input-field">
                                    <label> Salário </label>
                                    <input type="text" name="salario">
                                </div>
                            </div>
                        </div>

                        <div class="details ID">
                            <span class="title">Credencial</span>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Nome de usuário </label>
                                    <input type="text" name="usuario">
                                </div>

                                <div class="input-field">
                                    <label> Senha </label>
                                    <input type="text" name="senha_usuario">
                                </div>

                                <div class="input-field">
                                    <label> Função </label>
                                    <input type="text" name="funcao">
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