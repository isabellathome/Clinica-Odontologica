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
        <title> Perfil | Funcionário </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form.css">

    </head>
    <body>
        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h2> <?php echo $_SESSION['funcao']; ?> </h2>

            <div class="container">
                <header> Perfil </header>
                    <form action="Dashboard.php">
                        <div class="form first">
                            <div class="details personal">
                                <span class="title"> Informações </span>

                                <input type="hidden" name="id"  disabled>
                                <!-- value="<?php // echo $id; ?>" -->

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Nome completo </label>
                                        <input type="text" name="nome"  disabled>
                                        <!-- value="<?php // echo $nome; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>CPF</label>
                                        <input type="text" name="cpf"  disabled>
                                        <!-- value="<?php // echo $matricula; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>Data de nascimento</label>
                                        <input type="date" name="nascimento"  disabled>
                                        <!-- value="<?php // echo $nascimento; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>Email</label>
                                        <input type="text" name="email"  disabled>
                                        <!-- value="<?php // echo $email; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>Número celular</label>
                                        <input type="number" name="celular"  disabled>
                                        <!-- value="<?php // echo $celular; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label> Salário </label>
                                        <input type="text" name="salario"  disabled>
                                        <!-- value="<?php // echo $salario; ?>" -->
                                    </div>
                                </div>
                            </div>

                            <div class="details ID">
                                <span class="title">Credencial</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Nome de usuário </label>
                                        <input type="text" name="usuario"  disabled>
                                        <!-- value="<?php // echo $usuario; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label> Senha </label>
                                        <input type="text" name="senha_usuario"  disabled>
                                        <!-- value="<?php // echo $senha_usuario; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label> Função </label>
                                        <input type="text" name="funcao"  disabled>
                                        <!-- value="<?php // echo $funcao; ?>" -->
                                    </div>
                                </div>
                            </div>
                        
                            <div class="details address">
                                <span class="title">Endereço</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Logradouro</label>
                                        <input type="text" name="logradouro"  disabled>
                                        <!-- value="<?php // echo $logradouro; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>CEP</label>
                                        <input type="text" name="cep"  disabled>
                                        <!-- value="<?php // echo $cep; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>Número</label>
                                        <input type="text" name="numero"  disabled>
                                        <!-- value="<?php // echo $numero; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>Bairro</label>
                                        <input type="text" name="bairro"  disabled>
                                        <!-- value="<?php // echo $bairro; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>Complemento</label>
                                        <input type="text" name="complemento"  disabled>
                                        <!-- value="<?php // echo $complemento; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>Cidade</label>
                                        <input type="text" name="cidade"  disabled>
                                        <!-- value="<?php // echo $cidade; ?>" -->
                                    </div>

                                    <div class="input-field">
                                        <label>Estado</label>
                                        <input type="text" name="estado"  disabled>
                                        <!-- value="<?php // echo $estado; ?>" -->
                                    </div>
                                </div>
                            </div>
                            
                            <div class="buttons">                                                         
                                <button class="sumbit">
                                    <span class="btnText"> Voltar </span>
                                    <a href="Dashboard.php">
                                        <i class="uil uil-navigator"></i>
                                    </a>
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