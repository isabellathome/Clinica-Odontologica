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
                    $sql="SELECT * FROM convenios";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();

                    return $stmt->fetchAll();

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } // fim do catch 
            }
            
        // Excluir usuário pelo matricula
            public function excluir($codigo){
                try {
                   $pdo=Conexao::getInstance();
                   $sql="DELETE FROM convenios WHERE codigo =:codigo"; // depois do : é um parametro
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(':codigo',$codigo);
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } // fim do catch 
            }
            
        // Atualizar    
            public function alterar($id, $nome, $codigo, $valor, $procedimento, $desconto, $num_contemplados) {
                try {
                    $pdo=Conexao::getInstance();
                    $sql="UPDATE convenios SET nome=:nome, codigo=:codigo, valor=:valor, procedimento=:procedimento, desconto=:desconto, num_contemplados=:num_contemplados WHERE codigo=:codigo"; // depois do : é um parametro
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindValue(':nome',$nome);
                    $stmt->bindValue(':codigo',$codigo);
                    $stmt->bindValue(':valor',$valor);
                    $stmt->bindValue(':procedimento',$procedimento);
                    $stmt->bindValue(':desconto',$desconto);
                    $stmt->bindValue(':num_contemplados',$num_contemplados);
                    $stmt->execute();
 
                    return true;
 
                 } catch(PDOException $erro) {
                     echo $erro->getMessage();
                 } // fim do catch 
            }
        }
?>