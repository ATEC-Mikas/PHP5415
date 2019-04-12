<?php

require __DIR__ . "/vendor/autoload.php";
use Ficha\Livro;
use Ficha\Autor;

if(!isset($_GET["id"]) || $_GET["id"]=="" || !is_numeric($_GET["id"])) {require("indexlivros.php");die();}
require_once("db/conn.php");
$query="Select * from Livro where id=".$_GET["id"].";";
$table=$conn->query($query);
if($table->num_rows>0) {
    $row=$table->fetch_assoc();
    $livro=new Livro();
    $livro->format($row);
}else{header("location:livros.php");}

$query="Select * from Livro_Autor where id_livro=".$_GET["id"].";";
$table= $conn->query($query);
$autores_id=[]; 
if($table->num_rows>0) {
    while($row=$table->fetch_assoc()) {
        array_push($autores_id,$row["id_autor"]);
    }
} else{die("Fail DB");}

foreach($autores_id as $id) {
    $query="Select * from Autor where id=".$id.";";
    $table=$conn->query($query);
    $row=$table->fetch_assoc();
    $autor = new Autor();
    $autor->format($row);
    array_push($livro->autores,$autor);
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $livro->titulo;?></title>
</head>
<body>
    <h1><?php echo $livro->titulo;?></h1>
    <p><?php echo $livro->isbn;?></p>
    <p><?php echo $livro->genero;?></p>
    <p>Autores:
    <ul>
        <?php foreach($livro->autores as $autor) {?>
            
            <li><?php echo $autor->nome." - ".$autor->nacionalidade;?></li>

        <?php } ?>
    </ul>
    </p>

</body>
</html>
<?php $conn->close();?>