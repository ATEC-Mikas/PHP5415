<?php
    class Pessoa {
        var $nome;
        private $idade;


        function __construct($nome)
        {
            $this->nome=$nome;
        }
        function setIdade($idade) {
            if($idade >0) {
                $this->idade=$idade;
                return true;
            } 
            return false;
        }
        function getIdade() {
            return $this->idade;
        }
    }

    class Formando extends Pessoa {
        
    }

    $p = new Pessoa("teste");
    $p->nome="";
    $p->setIdade(22);
?>