<?php
    require_once("db/conn.php");
    $query = "insert into CD(titulo,ano,genero,musicos) values
    (
    '".$_POST["titulo"]."',
    '".$_POST["ano"]."',
    '".$_POST["genero"]."',
    '".$_POST["musicos"]."'
    );";

    if(!$conn->query($query)) die("Fail CD");

    $conn->close();

    header("location:index.php");
?>