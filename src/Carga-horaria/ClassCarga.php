
<?php

    class ClassCarga {
        private $id_entrada;
        private $nome_funcionario;
        private $data;
        private $hora_entrada;
        private $hora_saida;

        public function getId_entrada(){
            return $this->id_entrada;
        }
    
        public function setId_entrada($id_entrada){
            $this->id_entrada = $id_entrada;
        }
    
        public function getNome_funcionario(){
            return $this->nome_funcionario;
        }
    
        public function setNome_funcionario($nome_funcionario){
            $this->nome_funcionario = $nome_funcionario;
        }
    
        public function getData(){
            return $this->data;
        }
    
        public function setData($data){
            $this->data = $data;
        }
    
        public function getHora_entrada(){
            return $this->hora_entrada;
        }
    
        public function setHora_entrada($hora_entrada){
            $this->hora_entrada = $hora_entrada;
        }
    
        public function getHora_saida(){
            return $this->hora_saida;
        }
    
        public function setHora_saida($hora_saida){
            $this->hora_saida = $hora_saida;
        }
    } 
?>