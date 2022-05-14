<!-- ClassUsuario.php -->
<?php

    // é a classe responsavel pelo get e set
    class ClassUsuario {
        private $matricula;
        private $nome;

        function getMatricula() {
            return $this->matricula;
        }

        function getNome() {
            return $this->nome;
        }

        function setMatricula($matricula) {
            $this->matricula=$matricula;
        }

        function setNome($nome) {
            $this->nome=$nome;
        }

    } // fim da classe
?>