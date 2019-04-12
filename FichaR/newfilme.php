<?php
    require_once("db/conn.php");
    $query = "insert into Filme(titulo,ano,genero,estudio,realizador) values
    (
    '".$_POST["titulo"]."',
    '".$_POST["ano"]."',
    '".$_POST["genero"]."',
    '".$_POST["estudio"]."',
    '".$_POST["realizador"]."'
    );";

    if(!$conn->query($query)) die("Fail Filme");

    $query = "select id from Filme where titulo='".$_POST["titulo"]."';";

    $table=$conn->query($query);

    if($table->num_rows>0) {
        while($row=$table->fetch_assoc()) {
            if(empty(array_filter($_POST["ator"]))) {
                die("Fail Autor is Empty");
            }
            foreach ($_POST["ator"] as $value) {
                $query = "insert into Filme_Ator values
                (".$row["id"].",".$value.");";
                if(!$conn->query($query)) die("Fail Ator");
            }
        }
    }
        

    $conn->close();

    header("location:index.php");
?>