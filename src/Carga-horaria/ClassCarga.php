
<?php

    class ClassCarga {
        private $id_entrada;
        private $nome_funcionario;
        private $data_entrada;
        private $hora_entrada;
        private $data_saida;
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
    
        public function getData_entrada(){
            return $this->data_entrada;
        }
    
        public function setData_entrada($data_entrada){
            $this->data_entrada = $data_entrada;
        }
    
        public function getHora_entrada(){
            return $this->hora_entrada;
        }
    
        public function setHora_entrada($hora_entrada){
            $this->hora_entrada = $hora_entrada;
        }

        public function getData_saida(){
            return $this->data_saida;
        }
    
        public function setData_saida($data_saida){
            $this->data_saida = $data_saida;
        }
    
        public function getHora_saida(){
            return $this->hora_saida;
        }
    
        public function setHora_saida($hora_saida){
            $this->hora_saida = $hora_saida;
        }
    } 
?>