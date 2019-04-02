<?php
    namespace Atec;

    class Empresa {
        //Atributos
        private $nome; // texto
        private $morada; // texto
        private $email; // texto
        private $telefone; // numero

        //construtor

        function __construct($nome,$morada,$email,$telefone)
        {
            if(!$this->setNome($nome))
                $this->nome="";
            if(!$this->setMorada($morada))
                $this->morada="";
            if(!$this->setEmail($email))
                $this->email="";
            if(!$this->setTelefone($telefone))
                $this->telefone=-1;
        }

        //validar strings generico
        private function validarSG($s) {
            return is_string($s) && !is_null($s);
        }

        // sets & gets

        function setNome($n) {
            if($this->validarSG($n)) {
                $this->nome=$n;
                return true;
            }
            return false;
        }
        function getNome() {
            return $this->nome;
        }
        function setMorada($m) {
            if($this->validarSG($m)) {
                $this->morada=$m;
                return true;
            }
            return false;
        }
        function getMorada() {
            return $this->morada;
        }
        function setEmail($e) {
            if($this->validarSG($e)) {
                $this->email=$e;
                return true;
            }
            return false;
        }
        function getEmail() {
            return $this->email;
        }
        function setTelefone($t) {
            if(is_numeric($t) && $t>0) {
                $this->telefone=$t;
                return true;
            }
            return false;
        }
        function getTelefone() {
            return $this->telefone;
        }
    }




?>