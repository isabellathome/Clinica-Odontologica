<?php require_once '../ConexaoBD.php' ?>

<?php 

        class classProntuarioDAO {
            public function cadastrar($novoProntuario) {
                try {
                   $pdo=Conexao::getInstance();
                   $sql="INSERT INTO prontuarios(nome_paciente, nome_dentista, procedimento, descricao, data, hora) VALUES(?,?,?,?,?,?)";
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(1,$novoProntuario->getNome_paciente());
                   $stmt->bindValue(2,$novoProntuario->getNome_dentista());
                   $stmt->bindValue(3,$novoProntuario->getProcedimento());
                   $stmt->bindValue(4,$novoProntuario->getDescricao());
                   $stmt->bindValue(5,$novoProntuario->getData());
                   $stmt->bindValue(6,$novoProntuario->getHora());
                   
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                }         
           }

            public function listar() {
                try {
                    $pdo=Conexao::getInstance(); 
                    $sql="SELECT * FROM prontuarios";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();

                    return $stmt->fetchAll();

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                } 
            }

            public function alterar($id, $nome_paciente, $nome_dentista, $procedimento, $descricao, $data, $hora) {
                try {
                    $pdo=Conexao::getInstance();
                    $sql="UPDATE prontuarios SET id=:id, nome_paciente=:nome_paciente, nome_dentista=:nome_dentista, procedimento=:procedimento, descricao=:descricao, data=:data, hora=:hora  WHERE id=:id"; 
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindValue(':id',$id);
                    $stmt->bindValue(':nome_paciente',$nome_paciente);
                    $stmt->bindValue(':nome_dentista',$nome_dentista);
                    $stmt->bindValue(':procedimento',$procedimento);
                    $stmt->bindValue(':descricao',$descricao);
                    $stmt->bindValue(':data',$data);
                    $stmt->bindValue(':hora',$hora);
                    
                    $stmt->execute();
 
                    return true;
 
                 } catch(PDOException $erro) {
                     echo $erro->getMessage();
                 } 
            }
        }
?>