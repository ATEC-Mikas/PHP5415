<?php

require __DIR__ . "/vendor/autoload.php";
use Ficha\CD;

if(!isset($_GET["id"]) || $_GET["id"]=="" || !is_numeric($_GET["id"])) {require("indexcds.php");die();}
require_once("db/conn.php");
$query="Select * from CD where id=".$_GET["id"].";";
$table=$conn->query($query);
if($table->num_rows>0) {
    $row=$table->fetch_assoc();
    $CD=new CD();
    $CD->format($row);
}else{header("location:cds.php");}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $CD->titulo;?></title>
</head>
<body>
    <h1><?php echo $CD->titulo;?></h1>
    <p><?php echo $CD->ano;?></p>
    <p><?php echo $CD->genero;?></p>
    <p><?php echo $CD->musicos;?></p>

</body>
</html>
<?php $conn->close();?>