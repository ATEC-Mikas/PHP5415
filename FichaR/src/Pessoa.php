<?php namespace Ficha;

    class Pessoa{
        public $id;
        public $nome;
        public $nacionalidade;
        
        function format($data) {
            $this->id=$data["id"];
            $this->nome=$data["nome"];
            $this->nacionalidade=$data["nacionalidade"];
        }
    }

?>