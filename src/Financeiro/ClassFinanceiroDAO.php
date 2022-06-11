
<?php require_once '../ConexaoBD.php' ?>

<?php 

        class ClassFinanceiroDAO {
            public function cadastrar($novoFinanceiro) {
                try {
                   $pdo=Conexao::getInstance();
                   $sql="INSERT INTO financeiro(valor, vencimento, parcelas, tipo_pagamento, motivo, autor, status_pag) VALUES(?,?,?,?,?,?,?)";
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(1,$novoFinanceiro->getValor());
                   $stmt->bindValue(2,$novoFinanceiro->getVencimento());
                   $stmt->bindValue(3,$novoFinanceiro->getParcelas());
                   $stmt->bindValue(4,$novoFinanceiro->getTipo_pagamento());
                   $stmt->bindValue(5,$novoFinanceiro->getMotivo());
                   $stmt->bindValue(6,$novoFinanceiro->getAutor());
                   $stmt->bindValue(7,$novoFinanceiro->getStatus_pag());
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                }             
           }


            public function listar() {
                try {
                    $pdo=Conexao::getInstance(); 
                    $sql="SELECT * FROM financeiro";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute();

                    return $stmt->fetchAll();

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                }  
            }

            public function alterar($id, $valor, $vencimento, $parcelas, $tipo_pagamento, $motivo, $autor, $status_pag) {
                try {
                    $pdo=Conexao::getInstance();
                    $sql="UPDATE financeiro SET id=:id, valor=:valor, vencimento=:vencimento, parcelas=:parcelas, tipo_pagamento=:tipo_pagamento, motivo=:motivo, autor=:autor, status_pag=:status_pag WHERE id=:id"; // depois do : é um parametro
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindValue(':id',$id);
                    $stmt->bindValue(':valor',$valor);
                    $stmt->bindValue(':vencimento',$vencimento);
                    $stmt->bindValue(':parcelas',$parcelas);
                    $stmt->bindValue(':tipo_pagamento',$tipo_pagamento);
                    $stmt->bindValue(':motivo',$motivo);
                    $stmt->bindValue(':autor',$autor);
                    $stmt->bindValue(':status_pag',$status_pag);
                    $stmt->execute();
 
                    return true;
 
                 } catch(PDOException $erro) {
                     echo $erro->getMessage();
                 }  
            }
        }
?>