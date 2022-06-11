
<?php

    class ClassFinanceiro {
        private $id;
        private $valor;        
        private $vencimento;
        private $parcelas;
        private $tipo_pagamento;
        private $motivo;
        private $autor;
        private $status_pag;

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getValor(){
            return $this->valor;
        }
    
        public function setValor($valor){
            $this->valor = $valor;
        }
    
        public function getVencimento(){
            return $this->vencimento;
        }
    
        public function setVencimento($vencimento){
            $this->vencimento = $vencimento;
        }
    
        public function getParcelas(){
            return $this->parcelas;
        }
    
        public function setParcelas($parcelas){
            $this->parcelas = $parcelas;
        }
    
        public function getTipo_pagamento(){
            return $this->tipo_pagamento;
        }
    
        public function setTipo_pagamento($tipo_pagamento){
            $this->tipo_pagamento = $tipo_pagamento;
        }
    
        public function getMotivo(){
            return $this->motivo;
        }
    
        public function setMotivo($motivo){
            $this->motivo = $motivo;
        }
    
        public function getAutor(){
            return $this->autor;
        }
    
        public function setAutor($autor){
            $this->autor = $autor;
        }
    
        public function getStatus_pag(){
            return $this->status_pag;
        }
    
        public function setStatus_pag($status_pag){
            $this->status_pag = $status_pag;
        }
    } // fim da classe
?>