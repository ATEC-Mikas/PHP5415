<?php

require __DIR__ . "/vendor/autoload.php";
use Ficha\Filme;
use Ficha\Ator;

if(!isset($_GET["id"]) || $_GET["id"]=="" || !is_numeric($_GET["id"])) {require("indexfilmes.php");die();}
require_once("db/conn.php");
$query="Select * from Filme where id=".$_GET["id"].";";
$table=$conn->query($query);
if($table->num_rows>0) {
    $row=$table->fetch_assoc();
    $filme=new Filme();
    $filme->format($row);
}else{header("location:filmes.php");}

$query="Select * from Filme_Ator where id_filme=".$_GET["id"].";";
$table= $conn->query($query);
$atores_id=[]; 
if($table->num_rows>0) {
    while($row=$table->fetch_assoc()) {
        array_push($atores_id,$row["id_ator"]);
    }
} else{die("Fail DB");}

foreach($atores_id as $id) {
    $query="Select * from Ator where id=".$id.";";
    $table=$conn->query($query);
    $row=$table->fetch_assoc();
    $ator = new Ator();
    $ator->format($row);
    array_push($filme->atores,$ator);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $filme->titulo;?></title>
</head>
<body>
    <h1><?php echo $filme->titulo;?></h1>
    <p><?php echo $filme->ano;?></p>
    <p><?php echo $filme->genero;?></p>
    <p><?php echo $filme->estudio;?></p>
    <p><?php echo $filme->realizador;?></p>
    <p>Atores:
    <ul>
        <?php foreach($filme->atores as $ator) {?>
            
            <li><?php echo $ator->nome." - ".$ator->nacionalidade;?></li>

        <?php } ?>
    </ul>
    </p>

</body>
</html>
<?php $conn->close();?>