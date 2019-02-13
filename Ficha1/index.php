<h1>Primeiro exercicio</h1>
<div>
<?php
    for($i=1;$i<=10;$i++) {
        echo "$i <br>";
    }
?>
</div>
<h1>Segundo exercicio</h1>

<div>
<?php
    echo "<ul>";
    for($i=1;$i<=20;$i++) {
        echo "<li>$i</li>";
    }
    echo "</ul>";
?>
</div>
<h1>Terceiro exercicio</h1>
<div>
<?php
    for($i=1;$i<=100;$i++) {
        if($i%2==0) {
            echo "$i<br>";
        }
    }
?>
</div>
<h1>Quarto exercicio</h1>
<div>
<?php
    $tabuada=1;
    echo "Tabuada do numero: $tabuada <br>";
    for($i=1;$i<=10;$i++) {
        echo "$tabuada x $i = ".$tabuada*$i."<br>";
    }
?>
</div>
<h1>Quinto exercicio</h1>
<div>
<?php

    for($i=1;$i<=100;$i++) {
        $teste=true;
        for($x=2;$x<$i;$x++) {
            if($i%$x==0) {
                $teste=false;
                break;
            }
        }
        if($teste) {
            echo "$i <br>";
        }
    }
?>
</div>
<h1>Sexto exercicio</h1>
<div>
<?php
    $contador=0;
    $i=1;
    while($contador<100) {
        $teste=true;
        for($x=2;$x<$i;$x++) {
            if($i%$x==0) {
                $teste=false;
                break;
            }
        }
        if($teste) {
            echo "$i - $contador<br>";
            $contador++;
        }
        $i++;
}
?>
</div>
<h1>Sétimo exercicio</h1>
<div>
<?php
    $teste="amor a roma";
    if(strrev($teste)==$teste) {
        echo "É um palindromo.<br>";
    } else {echo "Não é um palindromo.<br>";}
?>
</div>
<h1>Oitavo exercicio</h1>
<div>
<?php
    $teste=1221;
    if(strrev(strval($teste))==strval($teste)) {
        echo "É uma capicua.<br>";
    } else {echo "Não é uma capicua.<br>";}
?>
</div>

