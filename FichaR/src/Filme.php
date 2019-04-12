<?php namespace Ficha;

    require __DIR__ . "/../vendor/autoload.php";
    use Ficha\Disco;

    class Filme extends Disco {
        public $estudio;
        public $realizador;
        public $atores;

        function __construct()
        {
            $this->atores = [];
        }
        
        function format(array $data) : void {
            $this->id = $data["id"];
            $this->titulo = $data["titulo"];
            $this->ano = $data["ano"];
            $this->genero = $data["genero"];
            $this->estudio = $data["estudio"];
            $this->realizador = $data["realizador"];
            //array_push($this->autores)
        }
    }

    ?>