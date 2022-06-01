<?php require_once '../ConexaoBD.php' ?>

<?php 

        class classConsultaDAO {
            public function cadastrar($novaConsulta) {
                try {
                   $pdo=Conexao::getInstance();
                   $sql="INSERT INTO consultas(nome_paciente, data, hora, nome_dentista, procedimento, descricao) VALUES(?,?,?,?,?,?)";
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(1,$novaConsulta->getNome_paciente());
                   $stmt->bindValue(2,$novaConsulta->getData());
                   $stmt->bindValue(3,$novaConsulta->getHora());
                   $stmt->bindValue(4,$novaConsulta->getNome_dentista());
                   $stmt->bindValue(5,$novaConsulta->getProcedimento());
                   $stmt->bindValue(6,$novaConsulta->getDescricao());
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                }         
           }

            public function listar() {
                try {
                    $pdo=Conexao::getInstance(); 
                    $sql="SELECT * FROM consultas";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();

                    return $stmt->fetchAll();

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } 
            }

            public function excluir($id){
                try {
                   $pdo=Conexao::getInstance();
                   $sql="DELETE FROM consultas WHERE id =:id"; 
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(':id',$id);
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } 
            }

            public function alterar($id, $nome_paciente, $data, $hora, $nome_dentista, $procedimento, $descricao) {
                try {
                    $pdo=Conexao::getInstance();
                    $sql="UPDATE consultas SET id=:id, nome_paciente=:nome_paciente, data=:data, hora=:hora, nome_dentista=:nome_dentista, procedimento=:procedimento, descricao=:descricao WHERE id=:id"; 
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindValue(':id',$id);
                    $stmt->bindValue(':nome_paciente',$nome_paciente);
                    $stmt->bindValue(':data',$data);
                    $stmt->bindValue(':hora',$hora);
                    $stmt->bindValue(':nome_dentista',$nome_dentista);
                    $stmt->bindValue(':procedimento',$procedimento);
                    $stmt->bindValue(':descricao',$descricao);
                    $stmt->execute();
 
                    return true;
 
                 } catch(PDOException $erro) {
                     echo $erro->getMessage();
                 } 
            }
        }
?>