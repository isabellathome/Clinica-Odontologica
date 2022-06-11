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
<?php require_once 'ClassPaciente.php'; ?>
<?php require_once 'ClassPacienteDAO.php';?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Editar | Pacientes </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form.css">       
    </head>

    <body>

<?php

    $classPacienteDAO = new ClassPacienteDAO();
    $array= $classPacienteDAO->listar();

    $array['nome'] = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $nascimento = $_GET['nascimento'];
    $email = $_GET['email'];
    $celular = $_GET['celular'];
    $telefone = $_GET['telefone'];
    $ultimo_trat = $_GET['ultimo_trat'];
    $quimio = $_GET['quimio'];
    $alergias = $_GET['alergias'];
    $logradouro = $_GET['logradouro'];
    $cep = $_GET['cep'];
    $numero = $_GET['numero'];
    $bairro = $_GET['bairro'];
    $complemento = $_GET['complemento'];
    $cidade = $_GET['cidade'];
    $estado = $_GET['estado'];

    

?>

 <!--========== CONTENTS ==========-->
     <main>
            <section>
                <h2> Pacientes </h2>

            <div class="container">
                <header> Visualizar </header>

                    <form action="pagePacientes.php">
                    <div class="form first">
                            <div class="details personal">
                                <span class="title"> Informações </span>

                                <input type="hidden" name="id" value="<?php echo $id; ?>" disabled>
                                <!--  -->

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Nome </label>
                                        <input type="text" name="nome" value="<?php echo $array['nome']; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>CPF</label>
                                        <input type="text" name="cpf" value="<?php echo $cpf; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>Data de nascimento</label>
                                        <input type="date" name="nascimento" value="<?php echo $nascimento; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?php echo $email; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>Número celular</label>
                                        <input type="text" name="celular" value="<?php echo $celular; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label> Telefone </label>
                                        <input type="text" name="telefone" value="<?php echo $telefone; ?>" disabled>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>

                            <div class="details ID">
                                <span class="title"> Anamnese </span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Último tratamento </label>
                                        <input type="text" name="ultimo_trat" value="<?php echo $ultimo_trat; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label> Realiza/realizou quimioterapia? </label>
                                        <input type="text" name="quimio" value="<?php echo $quimio; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label> Possui alergias? Qual? </label>
                                        <input type="text" name="alergias" value="<?php echo $alergias; ?>" disabled>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                        
                            <div class="details address">
                                <span class="title">Endereço</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Logradouro</label>
                                        <input type="text" name="logradouro" value="<?php echo $logradouro; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>CEP</label>
                                        <input type="text" name="cep" value="<?php echo $cep; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>Número</label>
                                        <input type="text" name="numero" value="<?php echo $numero; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>Bairro</label>
                                        <input type="text" name="bairro" value="<?php echo $bairro; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>Complemento</label>
                                        <input type="text" name="complemento" value="<?php echo $complemento; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>Cidade</label>
                                        <input type="text" name="cidade" value="<?php echo $cidade; ?>" disabled>
                                        <!--  -->
                                    </div>

                                    <div class="input-field">
                                        <label>Estado</label>
                                        <input type="text" name="estado" value="<?php echo $estado; ?>" disabled>
                                        <!--  -->
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="buttons">                                                         
                                <button class="sumbit">
                                    <a href="listar.php">
                                        <span class="btnText"> Voltar </span>                                    
                                        <i class="uil uil-navigator"></i>
                                    </a>
                                </button>
                                </div>
                            </div> -->

                            <div class="buttons">
                                <button class="sumbit">
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