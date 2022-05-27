<!-- ClassUsuario.php -->
<?php

    // é a classe responsavel pelo get e set
    class ClassFuncionario {
        private $id;
        private $nome;
        private $cpf;
        private $nascimento;
        private $email;
        private $celular;
        private $telefone;
        private $usuario;
        private $senha_usuario;
        private $funcao;
        private $logradouro;
        private $cep;
        private $numero;
        private $bairro;
        private $complemento;
        private $cidade;
        private $estado;

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
    
        public function getCpf(){
            return $this->cpf;
        }
    
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
    
        public function getNascimento(){
            return $this->nascimento;
        }
    
        public function setNascimento($nascimento){
            $this->nascimento = $nascimento;
        }
    
        public function getEmail(){
            return $this->email;
        }
    
        public function setEmail($email){
            $this->email = $email;
        }
    
        public function getCelular(){
            return $this->celular;
        }
    
        public function setCelular($celular){
            $this->celular = $celular;
        }
    
        public function getSalario(){
            return $this->salario;
        }
    
        public function setSalario($salario){
            $this->salario = $salario;
        }
    
        public function getUsuario(){
            return $this->usuario;
        }
    
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
    
        public function getSenha_usuario(){
            return $this->senha_usuario;
        }
    
        public function setSenha_usuario($senha_usuario){
            $this->senha_usuario = $senha_usuario;
        }
    
        public function getFuncao(){
            return $this->funcao;
        }
    
        public function setFuncao($funcao){
            $this->funcao = $funcao;
        }
    
        public function getLogradouro(){
            return $this->logradouro;
        }
    
        public function setLogradouro($logradouro){
            $this->logradouro = $logradouro;
        }
    
        public function getCep(){
            return $this->cep;
        }
    
        public function setCep($cep){
            $this->cep = $cep;
        }
    
        public function getNumero(){
            return $this->numero;
        }
    
        public function setNumero($numero){
            $this->numero = $numero;
        }
    
        public function getBairro(){
            return $this->bairro;
        }
    
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
    
        public function getComplemento(){
            return $this->complemento;
        }
    
        public function setComplemento($complemento){
            $this->complemento = $complemento;
        }
    
        public function getCidade(){
            return $this->cidade;
        }
    
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
    
        public function getEstado(){
            return $this->estado;
        }
    
        public function setEstado($estado){
            $this->estado = $estado;
        }
    } // fim da classe
?>