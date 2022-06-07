<!--  ClassUsuarioDAO.php  -->
<?php require_once '../ConexaoBD.php' ?>

<?php 

        class ClassCargaDAO {
            public function cadastrar($novaCarga) {
                try {
                   $pdo=Conexao::getInstance();
                   $sql="INSERT INTO carga(nome_funcionario, data, hora_entrada, hora_saida) VALUES(?,?,?,?)";
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(1,$novaCarga->getNome_funcionario());
                   $stmt->bindValue(2,$novaCarga->getData());
                   $stmt->bindValue(3,$novaCarga->getHora_entrada());
                   $stmt->bindValue(4,$novaCarga->getHora_saida());
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                }             
           }

           public function cadastrarSaida($novaCargaS) {
            try {
               $pdo=Conexao::getInstance();
               $sql="INSERT INTO carga_saida(nome_funcionario, data_saida, hora_saida) VALUES(?,?,?)";
               $stmt=$pdo->prepare($sql);
               $stmt->bindValue(1,$novaCargaS->getNome_funcionario());
               $stmt->bindValue(2,$novaCargaS->getData_saida());
               $stmt->bindValue(3,$novaCargaS->getHora_saida());
               $stmt->execute();

               return true;

            } catch(PDOException $erro) {
                echo $erro->getMessage();
            }             
       }

            public function listar() {
                try {
                    $pdo=Conexao::getInstance(); 
                    $sql="SELECT * FROM carga";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();

                    return $stmt->fetchAll();

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                }  
            }

            public function listarSaida() {
                try {
                    $pdo=Conexao::getInstance(); 
                    $sql="SELECT nome_funcionario, data_saida, hora_saida FROM carga_saida";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();

                    return $stmt->fetchAll();

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                }  
            }
        }
?>