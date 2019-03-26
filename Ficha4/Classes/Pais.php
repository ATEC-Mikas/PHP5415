<?php
    class Pais {
        private $nome; //string
        private $capital; //string
        private $habitantes; //numero
        private $area; //numero
        private $fronteira;

        function __construct($nome,$capital)
        {
            if(!$this->setNome($nome))
                $this->nome="erro";
            if(!$this->setCapital($capital))
                $this->capital="erro";
            
            $this->habitantes=0;
            $this->area=0;
            $this->fronteira=[];
        }

        private function validarString($string) {
            return is_string($string) && !empty($string);
        }
        private function validarNum($numeric) {
            return is_numeric($numeric) && $numeric>=0;
        }

        function setNome($nome) {
            if($this->validarString($nome)) {
                $this->nome=$nome;
                return true;
            }
            return false;
        }
        function getNome() {
            return $this->nome;
        }
        function setCapital($capital) {
            if($this->validarString($capital)) {
                $this->capital=$capital;
                return true;
            }
            return false;
        }
        function getCapital() {
            return $this->capital;
        }
        function setHabitantes($habitantes) {
            if($this->validarNum($habitantes)) {
                $this->habitantes=$habitantes;
                return true;
            }
            return false;
        }
        function getHabitantes() {
            return $this->habitantes;
        }
        function setArea($area) {
            if($this->validarNum($area)) {
                $this->area=$area;
                return true;
            }
            return false;
        }
        function getArea() {
            return $this->area;
        }

        function isIgual($pais) {
            if(strcmp(get_class($pais),"Pais")==0) {
                if($pais->getArea()==$this->area && $pais->getHabitantes()==$this->habitantes) {
                    return true;
                }
            }
            return false;
        }

        function adicionarFronteira($pais) {
            if(strcmp(get_class($pais),"Pais")==0) {
                $this->fronteira[count($this->fronteira)]=clone $pais;
                return true;
            }
            return false;
        }

        function removerFronteira($numero) {
            $length=count($this->fronteira);
            if(is_int($numero) && $numero<$length) {
                array_splice($this->$fronteiras,$numero,1); //todo ver se funfa :)
            }
        }

        function getFronteira() {
            return $this->fronteira;
        }
    }


?>