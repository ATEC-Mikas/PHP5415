<?php
    require_once("conn.php");

    $query = "";

    $query = "CREATE TABLE IF NOT EXISTS Livro (
        id int unsigned auto_increment primary key,
        isbn varchar(50),
        titulo varchar(200),
        genero varchar(50)
    );";

    if($conn->query($query)) {
        echo "Sucesso [Livro]<br>";
    } else {
        echo "Failure [Livro]<br>";
    }

    $query = " CREATE TABLE IF NOT EXISTS CD (
        id int unsigned auto_increment primary key,
        titulo varchar(200),
        ano varchar(4),
        genero varchar(50),
        musicos varchar(200));";


    if($conn->query($query)) {
        echo "Sucesso [CD]<br>";
    } else {
        echo "Failure [CD]<br>";
    }


    $query = " CREATE TABLE IF NOT EXISTS Filme (
        id int unsigned auto_increment primary key,
        titulo varchar(200),
        ano varchar(4),
        genero varchar(50),
        estudio varchar(100),
        realizador varchar(100)
        );";


    if($conn->query($query)) {
        echo "Sucesso [Filme]<br>";
    } else {
        echo "Failure [Filme]<br>";
    }

    $query = " CREATE TABLE IF NOT EXISTS Ator (
        id int unsigned auto_increment primary key,
        nome varchar(200),
        nacionalidade varchar(50)
        );";


    if($conn->query($query)) {
        echo "Sucesso [Ator]<br>";
    } else {
        echo "Failure [Ator]<br>";
    }

    $query = " CREATE TABLE IF NOT EXISTS Autor (
        id int unsigned auto_increment primary key,
        nome varchar(200),
        nacionalidade varchar(50)
        );";


    if($conn->query($query)) {
        echo "Sucesso [Autor]<br>";
    } else {
        echo "Failure [Autor]<br>";
    }

    $query = " CREATE TABLE IF NOT EXISTS Livro_Autor (
        id_livro int unsigned references Livro(id),
        id_autor int unsigned references Autor(id),
        primary key (id_livro,id_autor)    
        );";


    if($conn->query($query)) {
        echo "Sucesso [livro_autor]<br>";
    } else {
        echo "Failure [livro_autor]<br>";
    }

    $query = " CREATE TABLE IF NOT EXISTS Filme_Ator (
        id_filme int unsigned references Filme(id),
        id_ator int unsigned references Ator(id),
        primary key (id_filme,id_ator)    
        );";


    if($conn->query($query)) {
        echo "Sucesso [filme_ator]<br>";
    } else {
        echo "Failure [filme_ator]<br>";
    }

$conn->close();

?>