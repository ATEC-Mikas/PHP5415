<?php
    require_once("../db/conn.php");
    $query = "insert into Sugestao(Nome,Titulo,Mensagem,Data) values
    ('".$_POST["Nome"]."'
    ,'".$_POST["Titulo"]."'
    ,'".$_POST["Mensagem"]."'
    ,'".date("Y-m-d")."');";

    if(!$conn->query($query)) die("Fail Sugestao");
    $conn->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sugestao Criada</title>
</head>
<body>
    <h1>Sugestao Criada com sucesso!</h1>
    <p><a href="../index.php">Voltar à página principal</a></p>

</body>
</html>