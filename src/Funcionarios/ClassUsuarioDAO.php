<!--  ClassUsuarioDAO.php  -->
<?php require_once 'conexao.php' ?>

<?php 

    // Cadastrar os usuarios
        class ClassUsuarioDAO {
            public function cadastrar($novoUsuario) {
                try {
                   $pdo=Conexao::getInstance();
                   $sql="INSERT INTO contatos(matricula, nome) VALUES(?,?)";
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(1,$novoUsuario->getMatricula());
                   $stmt->bindValue(2,$novoUsuario->getNome());
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