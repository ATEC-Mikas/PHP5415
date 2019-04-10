<?php
    $conn = new mysqli("127.0.0.1","root","","blog");

    $query = "insert into posts (title,body) values(
             '".$_POST["title"]."',
             '".$_POST["body"]."');";


    $conn->query($query);

    $conn->close();

    header("location:index.php");
?>