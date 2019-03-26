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


?>