<!--  ClassUsuarioDAO.php  -->
<?php require_once 'conexao.php' ?>

<?php 

    // Cadastrar os usuarios
        class ClassConvenioDAO {
            public function cadastrar($novoConvenio) {
                try {
                   $pdo=Conexao::getInstance();
                   $sql="INSERT INTO convenios(nome, codigo, valor, procedimento, desconto, num_contemplados) VALUES(?,?,?,?,?,?)";
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(1,$novoConvenio->getNome());
                   $stmt->bindValue(2,$novoConvenio->getCodigo());
                   $stmt->bindValue(3,$novoConvenio->getValor());
                   $stmt->bindValue(4,$novoConvenio->getProcedimento());
                   $stmt->bindValue(5,$novoConvenio->getDesconto());
                   $stmt->bindValue(6,$novoConvenio->getNum_contemplados());
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
                    $sql="SELECT matricula, nome FROM contatos";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();

                    return $stmt->fetchAll();

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } // fim do catch 
            }
            
        // Excluir usuário pelo matricula
            public function excluir($matricula){
                try {
                   $pdo=Conexao::getInstance();
                   $sql="DELETE FROM contatos WHERE matricula =:matricula"; // depois do : é um parametro
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(':matricula',$matricula);
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } // fim do catch 
            }
            
        // Atualizar
            public function alterar($matricula,$nome) {
                try {
                    $pdo=Conexao::getInstance();
                    $sql="UPDATE contatos SET matricula=:matricula, nome=:nome WHERE matricula=:matricula"; // depois do : é um parametro
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindValue(':matricula',$matricula);
                    $stmt->bindValue(':nome',$nome);
                    $stmt->execute();
 
                    return true;
 
                 } catch(PDOException $erro) {
                     echo $erro->getMessage();
                 } // fim do catch 
            }
        }
?>