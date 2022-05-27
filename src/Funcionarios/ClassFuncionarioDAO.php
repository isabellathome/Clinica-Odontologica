<!--  ClassUsuarioDAO.php  -->
<?php require_once '../ConexaoBD.php' ?>

<?php 

    // Cadastrar os usuarios
        class ClassFuncionarioDAO {
            public function cadastrar($novoFuncionario) {
                try {
                   $pdo=Conexao::getInstance();
                   $sql="INSERT INTO funcionarios(nome, cpf, nascimento, email, celular, salario, usuario, senha_usuario, funcao, logradouro, cep, numero, bairro, complemento, cidade, estado) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(1,$novoFuncionario->getNome());
                   $stmt->bindValue(2,$novoFuncionario->getCpf());
                   $stmt->bindValue(3,$novoFuncionario->getNascimento());
                   $stmt->bindValue(4,$novoFuncionario->getEmail());
                   $stmt->bindValue(5,$novoFuncionario->getCelular());
                   $stmt->bindValue(6,$novoFuncionario->getSalario());
                   $stmt->bindValue(7,$novoFuncionario->getUsuario());
                   $stmt->bindValue(8,$novoFuncionario->getSenha_usuario());
                   $stmt->bindValue(9,$novoFuncionario->getFuncao());
                   $stmt->bindValue(10,$novoFuncionario->getLogradouro());
                   $stmt->bindValue(11,$novoFuncionario->getCep());
                   $stmt->bindValue(12,$novoFuncionario->getNumero());
                   $stmt->bindValue(13,$novoFuncionario->getBairro());
                   $stmt->bindValue(14,$novoFuncionario->getComplemento());
                   $stmt->bindValue(15,$novoFuncionario->getCidade());
                   $stmt->bindValue(16,$novoFuncionario->getEstado());
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } // fim do catch            
           }

           public function cadastrarUsuario($novoUsuario) {
            try {
               $pdo=Conexao::getInstance();
               $sql="INSERT INTO usuarios(usuario, senha_usuario, funcao) VALUES(?,?,?)";
               $stmt=$pdo->prepare($sql);
               $stmt->bindValue(1,$novoUsuario->getUsuario());
               $stmt->bindValue(2,$novoUsuario->getSenha_usuario());
               $stmt->bindValue(3,$novoUsuario->getFuncao());
               $stmt->execute();

               return true;

            } catch(PDOException $erro) {
                echo $erro->getMessage();
            } // fim do catch            
        }

        // Listar todos os usuarios
            public function listar() {
                try {
                    $pdo=Conexao::getInstance(); // PARA ACESSAR O MÉTODO NA CLASS CONEXAO INSTACIANDO O OBJETO CHAMADO PDO
                    $sql="SELECT * FROM funcionarios";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();

                    return $stmt->fetchAll();

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } // fim do catch 
            }
            
        // Excluir usuário pelo matricula
            public function excluir($id){
                try {
                   $pdo=Conexao::getInstance();
                   $sql="DELETE FROM funcionarios WHERE id =:id"; // depois do : é um parametro
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(':id',$id);
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } // fim do catch 
            }

            public function excluirUsuario($id){
                try {
                   $pdo=Conexao::getInstance();
                   $sql="DELETE FROM funcionarios WHERE id =:id"; // depois do : é um parametro
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(':id',$id);
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } // fim do catch 
            }
            
        // Atualizar
            public function alterar($id, $nome, $cpf, $nascimento, $email, $celular, $salario, $usuario, $senha_usuario, $funcao, $logradouro, $cep, $numero, $bairro, $complemento, $cidade, $estado) {
                try {
                    $pdo=Conexao::getInstance();
                    $sql="UPDATE funcionarios SET id=:id, nome=:nome, cpf=:cpf, nascimento=:nascimento, email=:email, celular=:celular, salario=:salario, usuario=:usuario, senha_usuario=:senha_usuario, funcao=:funcao, logradouro=:logradouro, cep=:cep, numero=:numero, bairro=:bairro, complemento=:complemento, cidade=:cidade, estado=:estado WHERE id=:id"; // depois do : é um parametro
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindValue(':id',$id);
                    $stmt->bindValue(':nome',$nome);
                    $stmt->bindValue(':cpf',$cpf);
                    $stmt->bindValue(':nascimento',$nascimento);
                    $stmt->bindValue(':email',$email);
                    $stmt->bindValue(':celular',$celular);
                    $stmt->bindValue(':salario',$salario);
                    $stmt->bindValue(':usuario',$usuario);
                    $stmt->bindValue(':senha_usuario',$senha_usuario);
                    $stmt->bindValue(':funcao',$funcao);
                    $stmt->bindValue(':logradouro',$logradouro);
                    $stmt->bindValue(':cep',$cep);
                    $stmt->bindValue(':numero',$numero);
                    $stmt->bindValue(':bairro',$bairro);
                    $stmt->bindValue(':complemento',$complemento);
                    $stmt->bindValue(':cidade',$cidade);
                    $stmt->bindValue(':estado',$estado);
                    $stmt->execute();
 
                    return true;
 
                 } catch(PDOException $erro) {
                     echo $erro->getMessage();
                 } // fim do catch 
            }

            public function alterarUsuario($id, $usuario, $senha_usuario, $funcao) {
                try {
                    $pdo=Conexao::getInstance();
                    $sql="UPDATE usuarios SET id=:id, usuario=:usuario, senha_usuario=:senha_usuario, funcao=:funcao WHERE id=:id"; // depois do : é um parametro
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindValue(':id',$id);
                    $stmt->bindValue(':usuario',$usuario);
                    $stmt->bindValue(':senha_usuario',$senha_usuario);
                    $stmt->bindValue(':funcao',$funcao);
                    $stmt->execute();
 
                    return true;
 
                 } catch(PDOException $erro) {
                     echo $erro->getMessage();
                 } // fim do catch 
            }
        }
?>