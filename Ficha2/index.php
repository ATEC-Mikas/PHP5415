<?php
$help = [];
$help["init"]= function($num) {
    echo "<div>";
    echo "<h1>Exercicio $num</h1>";
};
$help["close"]= function() {echo "<div>";};
$help["gerarvetor"]= function($tam) {
    $vet = [];
    for($i=0;$i<$tam;$i++) {
        $vet[$i]=rand(0,50);
    }
    return $vet;
};
$help["gerarmatriz"]= function($l,$c) {
    $mat = [];
    for($i=0;$i<$l;$i++) {
        $mat[$i]=[];
        for($j=0;$j<$c;$j++) {
            $mat[$i][$j]=rand(0,50);
        }
    }
    return $mat;
};

function isSizeEqual($mat1,$mat2) {
    if(count($mat1)==count($mat2)) {
        $c=NULL;
        for($i=0;$i<count($mat1);$i++) {
            if($c==null)
                $c=count($mat1[$i]);
            elseif($c!=count($mat1[$i]))
                return false;
        }
        return true;
    }
    return false;
}

function isQuadrada($mat) {
        $c=NULL;
        for($i=0;$i<count($mat);$i++) {
            if($c==null && count($mat)==count($mat[$i]))
                $c=count($mat[$i]);
            elseif($c!=count($mat[$i]))
                return false;
        }
            return true; 
}

function imprimirMatriz($mat) {
    foreach($mat as $fila){
        foreach($fila as $num) {
            echo "$num ";
        }
        echo "<br>";
    }
}

function imprimirVetor($vet) {
    foreach($vet as $num)
    echo "$num<br>";
}
function devolverMes($num) {
    switch($num) {
        case 1:
            return "Janeiro";
            break;
        case 2:
            return "Fevereiro";
            break;
        case 3:
            return "Março";
            break;
        case 4:
            return "Abril";
            break;
        case 5:
            return "Maio";
            break;
        case 6:
            return "Junho";
            break;
        case 7:
            return "Julho";
            break;
        case 8:
            return "Agosto";
            break;
        case 9:
            return "Setembro";
            break;
        case 10:
            return "Outubro";
            break;
        case 11:
            return "Novembro";
            break;
        case 12:
            return "Dezembro";
            break;
        default:
            return "Mês não existente";
    }
}

    $help["init"](1);
    $vet = $help["gerarvetor"](20);
    function maior($vetor) {
        $maior=NULL;
        foreach($vetor as $num) {
            if($maior==NULL)
                $maior=$num;
            elseif($maior<$num)
                $maior=$num;
        }
        return $maior;
    }
    $r=maior($vet);
    if($r!=NULL)
        echo "O numero mais alto foi o $r";
    else 
        echo "Ocorreu um erro";
    $help["close"]();
    
    $help["init"](2);
    $vet=$help["gerarvetor"](20);
    $cont = [0,0];
    foreach($vet as $num) {
        $cont[$num%2]++;
    }
    echo "Numeros pares: ".$cont[0]."<br>Numeros impares: ".$cont[1];
    $help["close"]();

    $help["init"](3);
    $vet1=$help["gerarvetor"](10);
    $vet2=$help["gerarvetor"](10);
    $vet3=[];
    foreach($vet1 as $num1) {
        foreach($vet2 as $num2) {
            if($num1==$num2) {
                if(!in_array($num1,$vet3))
                    $vet3[count($vet3)]=$num1;
                break;
            }
        }
    }
    echo "Numeros comuns: ";
    foreach($vet3 as $num)
        echo "$num<br>";
    $help["close"]();

    
    $help["init"](4);
    $mat1=$help["gerarmatriz"](4,4);
    $mat2=$help["gerarmatriz"](4,4);
    $mat3=[];
    if(isSizeEqual($mat1,$mat2)) {
        for($i=0;$i<count($mat1);$i++) {
            $mat3[$i]=[];
            for($j=0;$j<count($mat1[$i]);$j++) {
                $mat3[$i][$j]=$mat1[$i][$j]+$mat2[$i][$j];
            }
        }
    
    }
    imprimirMatriz($mat1);
    echo "<br>";
    imprimirMatriz($mat2);
    echo "<br>";
    imprimirMatriz($mat3);
    $help["close"]();

    $help["init"](5);
    $mat=$help["gerarmatriz"](5,5);
    $vet=[];
    if(isQuadrada($mat))
        for($i=0;$i<count($mat);$i++)
            $vet[count($vet)]=$mat[$i][$i];
    imprimirMatriz($mat);
    echo "<br>";
    imprimirVetor($vet);
    $help["close"]();

    $help["init"](6);
    $num=rand(1,12);
    echo "Numero: $num | Mês: ".devolverMes($num);
    $help["close"]();

    $help["init"](7);
    $info=[
        "nome" => "Felizberto",
        "morada" => [ 
            "endereco" => "Rua das aboboras",
            "codigop" => "6666-468",
            "localidade" => "Puorto"
        ],
        "contactos" => [
            "email" => "teste@hotmail.com",
            "telefone" => 912298721,
            "telemovel" => 91111111
        ],
        "curso" => [
            "nome" => "Tijoleiro",
            "ufcd" => [
                "codigo" => 111,
                "descricao" => "curso de trolha avançado"
            ]
        ]
    ];
    $help["close"]();

    
?>


