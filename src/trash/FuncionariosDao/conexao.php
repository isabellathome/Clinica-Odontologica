<?php

    abstract class Conexao {
        public static function getInstance() {
            // tente
            try {
                $pdo = new PDO("mysql:host=localhost;dbname=clinica_odontologica", "root", "");
                return $pdo;

                // se der erro
            } catch(PDOException $erro) {
                echo $erro->getMessage();
            }

        } // fim do método
    } // fim da classe

?>