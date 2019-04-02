<?php

    namespace Atec;
    
    class Movimento {
        private $data; //data
        private $valor; //numero
        private $tipo; //débito ou crédito

        //credito +
        //debito -
        
        function __construct($valor)
        {
            $this->data=date("d-m-Y H:i:s");
            if(is_numeric($valor)) {
                if($valor>0) {
                    $this->valor=$valor;
                    $this->tipo="credito";
                }
                else {
                    $this->valor=abs($valor);
                    $this->tipo="debito";
                }
            } 
        }

        function getData() {
            return $this->data;
        }
        function getValor() {
            return $this->valor;
        }
        function getTipo() {
            return $this->tipo;
        }
    }



?>