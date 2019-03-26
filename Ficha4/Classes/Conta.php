<?php
    require_once("Movimento.php");


    class Conta {
        private $id; //numero
        private $nome; //string
        //private $saldo; //numero - movimentos
        private $movimentos;

        private function guidv4()
        {
            if (function_exists('com_create_guid') === true)
                return trim(com_create_guid(), '{}');
        
            $data = openssl_random_pseudo_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }

        
        function __construct($nome,$valor_init)
        {
            $this->id=$this->guidv4();//com_create_guid();
            if(!$this->setNome($nome))
                $this->nome="erro";
            $this->movimentos=[];
            if(is_numeric($valor_init) && $valor_init!=0)                
                $this->adicionarMovimento(new Movimento($valor_init));
        }

        function getId() {
            return $this->id;
        }

        function setNome($nome) {
            if(is_string($nome) && !empty($nome)) {
                $this->nome=$nome;
                return true;
            }
            return false;
        }

        function getNome() {
            return $this->nome;
        }

        function adicionarMovimento($movimento) {
            if(strcmp(get_class($movimento),"Movimento")==0) {
                $this->movimentos[count($this->movimentos)]= clone $movimento;
                return true;
            }
            return false;
        }

        function removerMovimento($pos) {
            $length=count($this->movimentos);
            if(is_numeric($pos) && $pos<$length) {
                array_splice($this->movimentos,$pos,1);
            }
        }
        
        function getMovimentos() {
            return $this->movimentos;
        }

        function getSaldo() {
            $soma=0;
            foreach($this->movimentos as $movimento) {
                if(strcmp($movimento->getTipo(),"credito")==0) 
                    $soma+=$movimento->getValor();
                else if(strcmp($movimento->getTipo(),"debito")==0)
                    $soma=$soma - $movimento->getValor();
            }
            return $soma;
        }
    
    
    }




?>