<?php
    echo "<h1>Pais</h1>";
    require_once("Classes/Pais.php");
    $p1 = new Pais("Tuga","Lisbon");
    $p2 = new Pais("TugaTown","LisbonLife");
    $p1->setHabitantes(1991);
    $p1->setArea(192);
    $p2->setHabitantes(1991);
    $p2->setArea(192);

    if($p1->isIgual($p2))
        echo "é igual";
    else 
        echo "é diferente";


    echo "<h1>Contas</h1>";
    require_once("Classes/Conta.php");
    function listarMovimentos($conta) {
        foreach($conta->getMovimentos() as $movimento) {
            echo "Data: ".$movimento->getData()
            ." Valor: ".$movimento->getValor()
            ." Tipo: ".$movimento->getTipo()
            ."<br>";
        }
    }
    $c1 = new Conta("Eu mesmo",-5);
    $c1->adicionarMovimento(new Movimento(55));
    echo $c1->getSaldo();
    echo "<br>";
    listarMovimentos($c1);
    echo "<br>";
    $c1->removerMovimento(1);
    listarMovimentos($c1);

?>