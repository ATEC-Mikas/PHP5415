<?php namespace Ficha;
    require __DIR__ . "/../vendor/autoload.php";
    use Ficha\Disco;


    class CD extends Disco {
        public $musicos;

        function format($data) {
            $this->id = $data["id"];
            $this->titulo = $data["titulo"];
            $this->ano = $data["ano"];
            $this->genero = $data["genero"];
            $this->musicos = $data["musicos"];
        }
    }

?>