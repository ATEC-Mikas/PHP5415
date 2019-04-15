<?php
    require_once("conn.php");

    $query = "CREATE TABLE IF NOT EXISTS Mensagem (
        id int unsigned auto_increment primary key,
        Nome varchar(100),
        Titulo varchar(200),
        Mensagem text,
        Data date
    );";

    if($conn->query($query)) {
        echo "Sucesso [Mensagem]<br>";
    } else {
        echo "Failure [Mensagem]<br>";
    }

    $query = "CREATE TABLE IF NOT EXISTS Sugestao (
        id int unsigned auto_increment primary key,
        Titulo varchar(200),
        Nome varchar(100),
        Mensagem text,
        Data date
    );";

    if($conn->query($query)) {
        echo "Sucesso [Sugestao]<br>";
    } else {
        echo "Failure [Sugestao]<br>";
    }
$conn->close();

?>