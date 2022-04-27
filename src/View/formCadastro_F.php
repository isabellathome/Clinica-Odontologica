<?php
    session_start();
    ob_start();
    include_once "../../database/conexao.php";

    if((!isset($_SESSION['id'])) AND (!isset($_SESSION['funcao']))){
        $_SESSION['msg'] = "<p style='color: #ff0000; margin-bottom: 45px'>Erro: Necessário realizar o login para acessar a página!</p>";
        header("Location: login.php");
    }
?>

<?php include ("../../components/header.php") ?>

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

                <form action="#">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title"> Informações </span>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Nome completo </label>
                                    <input type="text" placeholder="Digite seu nome">
                                </div>

                                <div class="input-field">
                                    <label>Data de nascimento</label>
                                    <input type="date" placeholder="Digite sua data de nascimento">
                                </div>

                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="text" placeholder="Enter your email">
                                </div>

                                <div class="input-field">
                                    <label>Número celular</label>
                                    <input type="number" placeholder="Enter mobile number">
                                </div>

                                <div class="input-field">
                                    <label> Genero</label>
                                    <select>
                                        <option disabled selected>Select gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>

                                <div class="input-field">
                                    <label> Salário </label>
                                    <input type="text" placeholder="Enter your ccupation">
                                </div>
                            </div>
                        </div>

                        <div class="details ID">
                            <span class="title">Credencial</span>

                            <div class="fields">
                                <div class="input-field">
                                    <label> Nome de usuário </label>
                                    <input type="text" placeholder="Enter ID type">
                                </div>

                                <div class="input-field">
                                    <label> Senha </label>
                                    <input type="text" placeholder="Enter ID type">
                                </div>

                                <div class="input-field">
                                    <label> Função </label>
                                    <input type="text" placeholder="Enter ID number">
                                </div>
                            </div>
                        </div> 
                    
                        <div class="details address">
                            <span class="title">Endereço</span>

                            <div class="fields">
                                <div class="input-field">
                                    <label>Logradouro</label>
                                    <input type="text" placeholder="Permanent or Temporary">
                                </div>

                                <div class="input-field">
                                    <label>CEP</label>
                                    <input type="text" placeholder="Enter nationality">
                                </div>

                                <div class="input-field">
                                    <label>Número</label>
                                    <input type="text" placeholder="Enter your state">
                                </div>

                                <div class="input-field">
                                    <label>Bairro</label>
                                    <input type="text" placeholder="Enter your district">
                                </div>

                                <div class="input-field">
                                    <label>Complemento</label>
                                    <input type="number" placeholder="Enter block number">
                                </div>

                                <div class="input-field">
                                    <label>Cidade</label>
                                    <input type="number" placeholder="Enter ward number">
                                </div>

                                <div class="input-field">
                                    <label>Estado</label>
                                    <input type="number" placeholder="Enter ward number">
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