<?php

    class ClassConsulta {
        private $id;
        private $nome_paciente;
        private $data;
        private $hora;
        private $nome_dentista;
        private $procedimento;
        private $descricao;

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getNome_paciente(){
            return $this->nome_paciente;
        }
    
        public function setNome_paciente($nome_paciente){
            $this->nome_paciente = $nome_paciente;
        }

        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email = $email;
        }
    
        public function getData(){
            return $this->data;
        }
    
        public function setData($data){
            $this->data = $data;
        }
    
        public function getHora(){
            return $this->hora;
        }
    
        public function setHora($hora){
            $this->hora = $hora;
        }
    
        public function getNome_dentista(){
            return $this->nome_dentista;
        }
    
        public function setNome_dentista($nome_dentista){
            $this->nome_dentista = $nome_dentista;
        }
    
        public function getProcedimento(){
            return $this->procedimento;
        }
    
        public function setProcedimento($procedimento){
            $this->procedimento = $procedimento;
        }
    
        public function getDescricao(){
            return $this->descricao;
        }
    
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
    } 
?>