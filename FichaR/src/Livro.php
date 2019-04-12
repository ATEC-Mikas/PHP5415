<?php namespace Ficha;


    class Livro {
        public $id;
        public $isbn;
        public $titulo;
        public $genero;
        public $autores;

        function __construct()
        {
            $this->autores= [];
        }

        function format(array $data) : void {
            $this->id = $data["id"];
            $this->isbn = $data["isbn"];
            $this->titulo = $data["titulo"];
            $this->genero = $data["genero"];
            //array_push($this->autores)
        }
    }

?>