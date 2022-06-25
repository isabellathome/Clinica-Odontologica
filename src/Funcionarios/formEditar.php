<?php require_once 'ClassFuncionario.php'; ?>
<?php require_once 'ClassFuncionarioDAO.php'; ?>
<?php include ("../session.php") ?>
<?php include ("../components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Editar | Funcionários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../public/css/sidebar.css">
        <link rel="stylesheet" href="../../public/css/form.css">     

        <script src="../../public/scripts/validacoes.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/master/src/jquery.mask.js"></script>
    
    </head>

    <?php
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $cpf = $_GET['cpf'];
        $nascimento = $_GET['nascimento'];
        $email = $_GET['email'];
        $celular = $_GET['celular'];
        $salario = $_GET['salario'];
        $usuario = $_GET['usuario'];
        $senha_usuario = $_GET['senha_usuario'];
        $funcao = $_GET['funcao'];
        $logradouro = $_GET['logradouro'];
        $cep = $_GET['cep'];
        $numero = $_GET['numero'];
        $bairro = $_GET['bairro'];
        $complemento = $_GET['complemento'];
        $cidade = $_GET['cidade'];
        $estado = $_GET['estado'];
    ?>

    <body>

        <!--========== CONTENTS ==========-->
        <main>
            <section>
                <h2> Funcionários </h2>

            <div class="container">
                <header> Editar </header>

                    <form action="editar.php" method="get">
                        <div class="form first">
                            <div class="details personal">
                                <span class="title"> Informações </span>

                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Nome </label>
                                        <input type="text" name="nome" value="<?php echo $nome; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>CPF</label>
                                        <input oninput="mascara(this)" type="text" name="cpf" maxlength="14" id="input" value="<?php echo $cpf; ?>" /><span id="resposta"></span>
                                    </div>

                                    <div class="input-field">
                                        <label>Data de nascimento</label>
                                        <input type="date" name="nascimento" value="<?php echo $nascimento; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>Email</label>
                                        <input type="text" name="email" value="<?php echo $email; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>Número celular</label>
                                        <input type="text" maxlength="15" class="phone" id="celular" patern="(\(?\d{2}\)?\s)?(\d{4,5}\-\d{4})" name="celular" value="<?php echo $celular; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label> Salário (R$) </label>
                                        <input type="text" maxlength="15" name="salario" onkeypress="return(moeda(this,'.',',',event))" value="<?php echo $salario; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="details ID">
                                <span class="title">Credencial</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label> Nome de usuário </label>
                                        <input type="text" name="usuario" value="<?php echo $usuario; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label> Senha </label>
                                        <input type="password" name="senha_usuario" value="<?php echo $senha_usuario; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label> Função </label>
                                        <input type="text" name="funcao" value="<?php echo $funcao; ?>">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="details address">
                                <span class="title">Endereço</span>

                                <div class="fields">
                                    <div class="input-field">
                                        <label>Logradouro</label>
                                        <input type="text" name="logradouro" value="<?php echo $logradouro; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>CEP</label>
                                        <input type="text" name="cep" value="<?php echo $cep; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>Número</label>
                                        <input type="text" name="numero" value="<?php echo $numero; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>Bairro</label>
                                        <input type="text" name="bairro" value="<?php echo $bairro; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>Rua</label>
                                        <input type="text" name="complemento" value="<?php echo $complemento; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>Cidade</label>
                                        <input type="text" name="cidade" value="<?php echo $cidade; ?>">
                                    </div>

                                    <div class="input-field">
                                        <label>Estado</label>
                                        <input type="text" name="estado" value="<?php echo $estado; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="buttons">       

                                <button class="submit">
                                    <span class="btnText"> Editar </span>
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