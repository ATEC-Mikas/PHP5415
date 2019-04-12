<?php
    require_once("db/conn.php");
    $query = "insert into Autor(nome,nacionalidade) values
    ('".$_POST["nome"]."','".$_POST["nacionalidade"]."');";

    if(!$conn->query($query)) die("Fail");
    $conn->close();

    header("location:index.php");
?>