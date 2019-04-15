<?php
    require_once("../db/conn.php");
    $query = "insert into Mensagem(Nome,Titulo,Mensagem,Data) values
    ('".$_POST["Nome"]."'
    ,'".$_POST["Titulo"]."'
    ,'".$_POST["Mensagem"]."'
    ,'".date("Y-m-d")."');";

    if(!$conn->query($query)) die("Fail Mensagem");
    $conn->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensagem Criada</title>
</head>
<body>
    <h1>Mensagem Criada com sucesso!</h1>
    <p><a href="../index.php">Voltar à página principal</a></p>

</body>
</html>