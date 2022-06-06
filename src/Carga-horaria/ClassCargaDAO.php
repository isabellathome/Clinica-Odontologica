<!--  ClassUsuarioDAO.php  -->
<?php require_once '../ConexaoBD.php' ?>

<?php 

        class ClassCargaDAO {
            public function cadastrarEntrada($novaCargaE) {
                try {
                   $pdo=Conexao::getInstance();
                   $sql="INSERT INTO carga_entrada(nome_funcionario, data_entrada, hora_entrada) VALUES(?,?,?)";
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(1,$novaCargaE->getNome_funcionario());
                   $stmt->bindValue(2,$novaCargaE->getData_entrada());
                   $stmt->bindValue(3,$novaCargaE->getHora_entrada());
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

            public function listarEntrada() {
                try {
                    $pdo=Conexao::getInstance(); 
                    $sql="SELECT hora_entrada FROM carga_entrada";
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