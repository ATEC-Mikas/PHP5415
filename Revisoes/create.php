<?php

$conn = new mysqli("127.0.0.1","root","","blog");

$query = "CREATE TABLE IF NOT EXISTS posts (
        id int unsigned auto_increment primary key,
        title varchar(200),
        body text
    );";

if($conn->query($query)) {
    echo "Sucesso [posts]<br>";
} else {
    echo "Failure [posts]<br>";
}

$query = " CREATE TABLE IF NOT EXISTS comments (
    id int unsigned auto_increment primary key,
    nome varchar(200),
    message text,
    id_post int unsigned references posts(id)
);";

if($conn->query($query)) {
    echo "Sucesso [comments]<br>";
} else {
    echo "Failure [comments]<br>";
}

$conn->close();




?>