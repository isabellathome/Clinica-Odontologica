
<?php require_once '../ConexaoBD.php' ?>

<?php 

        class ClassPacienteDAO {
            public function cadastrar($novoPaciente) {
                try {
                   $pdo=Conexao::getInstance();
                   $sql="INSERT INTO pacientes(nome, cpf, nascimento, email, celular, telefone, ultimo_trat, quimio, alergias, logradouro, cep, numero, bairro, complemento, cidade, estado) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(1,$novoPaciente->getNome());
                   $stmt->bindValue(2,$novoPaciente->getCpf());
                   $stmt->bindValue(3,$novoPaciente->getNascimento());
                   $stmt->bindValue(4,$novoPaciente->getEmail());
                   $stmt->bindValue(5,$novoPaciente->getCelular());
                   $stmt->bindValue(6,$novoPaciente->getTelefone());
                   $stmt->bindValue(7,$novoPaciente->getUltimo_trat());
                   $stmt->bindValue(8,$novoPaciente->getQuimio());
                   $stmt->bindValue(9,$novoPaciente->getAlergias());
                   $stmt->bindValue(10,$novoPaciente->getLogradouro());
                   $stmt->bindValue(11,$novoPaciente->getCep());
                   $stmt->bindValue(12,$novoPaciente->getNumero());
                   $stmt->bindValue(13,$novoPaciente->getBairro());
                   $stmt->bindValue(14,$novoPaciente->getComplemento());
                   $stmt->bindValue(15,$novoPaciente->getCidade());
                   $stmt->bindValue(16,$novoPaciente->getEstado());
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                }           
           }

            public function listar() {
                try {
                    $pdo=Conexao::getInstance();
                    $sql="SELECT * FROM pacientes";
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
                   $sql="DELETE FROM pacientes WHERE id =:id"; 
                   $stmt=$pdo->prepare($sql);
                   $stmt->bindValue(':id',$id);
                   $stmt->execute();

                   return true;

                } catch(PDOException $erro) {
                    echo $erro->getMessage();
                }  
            }

            public function alterar($id, $nome, $cpf, $nascimento, $email, $celular, $telefone, $ultimo_trat, $quimio, $alergias, $logradouro, $cep, $numero, $bairro, $complemento, $cidade, $estado) {
                try {
                    $pdo=Conexao::getInstance();
                    $sql="UPDATE pacientes SET id=:id, nome=:nome, cpf=:cpf, nascimento=:nascimento, email=:email, celular=:celular, telefone=:telefone, ultimo_trat=:ultimo_trat, quimio=:quimio, alergias=:alergias, logradouro=:logradouro, cep=:cep, numero=:numero, bairro=:bairro, complemento=:complemento, cidade=:cidade, estado=:estado WHERE id=:id"; 
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindValue(':id',$id);
                    $stmt->bindValue(':nome',$nome);
                    $stmt->bindValue(':cpf',$cpf);
                    $stmt->bindValue(':nascimento',$nascimento);
                    $stmt->bindValue(':email',$email);
                    $stmt->bindValue(':celular',$celular);
                    $stmt->bindValue(':telefone',$telefone);
                    $stmt->bindValue(':ultimo_trat',$ultimo_trat);
                    $stmt->bindValue(':quimio',$quimio);
                    $stmt->bindValue(':alergias',$alergias);
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
                 }  
            }
        }
?>