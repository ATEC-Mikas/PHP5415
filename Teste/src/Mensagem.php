<?php
    namespace Microblog;

    class Mensagem {
        protected $Nome; //string
        protected $Titulo; //string
        protected $Mensagem; //string
        protected $Data; //string... acho eu?

        function __construct()
        {
        }

        protected function validarString($s) {
            if(is_string($s) && !empty($s)) {
                return true;
            }
            return false;
        }

        function getNome() {
            return $this->Nome;
        }

        function setNome($n) {
            if($this->validarString($n)) {
                $this->Nome = $n;
            }
        }

        function getTitulo() {
            return $this->Titulo;
        }

        function setTitulo($n) {
            if($this->validarString($n)) {
                $this->Titulo = $n;
            }
        }

        function getMensagem() {
            return $this->Mensagem;
        }

        function setMensagem($m) {
            if($this->validarString($m)) {
                $this->Mensagem = $m;
            }
        }

        function getData() {
            return $this->Data;
        }

        function setData($m) {
            if($m!=null) {
                $this->Data = $m;
            }
        }


        function format($data) {
            if(isset($data["Nome"])) {
                $this->Nome=$data["Nome"];
            }
            if(isset($data["Titulo"])) {
                $this->Titulo=$data["Titulo"];
            }
            if(isset($data["Mensagem"])) {
                $this->Mensagem=$data["Mensagem"];
            }
            if(isset($data["Data"])) {
                $this->Data=$data["Data"];
            }
        }
    }



?>