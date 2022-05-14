<?php

    class ClassConsulta {
        private $id_consulta;
        private $nome_paciente;
        private $data;
        private $hora;
        private $nome_dentista;
        private $procedimento;
        private $descricao;

        public function getId_consulta(){
            return $this->id_consulta;
        }
    
        public function setId_consulta($id_consulta){
            $this->id_consulta = $id_consulta;
        }
    
        public function getNome_paciente(){
            return $this->nome_paciente;
        }
    
        public function setNome_paciente($nome_paciente){
            $this->nome_paciente = $nome_paciente;
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