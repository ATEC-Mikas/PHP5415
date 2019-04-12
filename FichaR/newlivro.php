<?php
    require_once("db/conn.php");
    $query = "insert into Livro(isbn,titulo,genero) values
    ('".$_POST["isbn"]."','".$_POST["titulo"]."',
    '".$_POST["genero"]."');";

    if(!$conn->query($query)) die("Fail Livro");

    $query = "select id from Livro where isbn='".$_POST["isbn"]."';";

    $table=$conn->query($query);

    if($table->num_rows>0) {
        while($row=$table->fetch_assoc()) {
            if(empty(array_filter($_POST["autor"]))) {
                die("Fail Autor is Empty");
            }
            foreach ($_POST["autor"] as $value) {
                $query = "insert into Livro_Autor values
                (".$row["id"].",".$value.");";
                if(!$conn->query($query)) die("Fail Autor");
            }
        }
    }
        

    $conn->close();

    header("location:index.php");
?>