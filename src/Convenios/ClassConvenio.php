<!-- ClassUsuario.php -->
<?php

    // é a classe responsavel pelo get e set
    class ClassConvenio {
        private $id;
        private $nome;
        private $codigo;
        private $valor;
        private $procedimento;
        private $desconto;
        private $num_contemplados;

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getCodigo(){
            return $this->codigo;
        }
    
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
    
        public function getValor(){
            return $this->valor;
        }
    
        public function setValor($valor){
            $this->valor = $valor;
        }
    
        public function getProcedimento(){
            return $this->procedimento;
        }
    
        public function setProcedimento($procedimento){
            $this->procedimento = $procedimento;
        }
    
        public function getDesconto(){
            return $this->desconto;
        }
    
        public function setDesconto($desconto){
            $this->desconto = $desconto;
        }
    
        public function getNum_contemplados(){
            return $this->num_contemplados;
        }
    
        public function setNum_contemplados($num_contemplados){
            $this->num_contemplados = $num_contemplados;
        }
    } // fim da classe
?>