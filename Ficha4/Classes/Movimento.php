<?php
    class Movimento {
        private $data; //data
        private $valor; //numero
        private $tipo; //débito ou crédito

        function __construct($valor,$tipo)
        {
            $data=time();
            if(is_numeric($valor) && $valor>0) 
                $this->valor=$valor;
            if(is_string($tipo)) {
                if(strcmp(strtolower($tipo),"credito"))
                    $this->tipo="credito";
                else if(strcmp(strtolower($tipo),"debito"))
                    $this->tipo="debito";
            }
            
        }

        function getData() {
            return date('d-m-Y',$this->data);
        }
        function getValor() {
            return $this->valor;
        }
        function getTipo() {
            return $this->tipo;
        }
    }



?>