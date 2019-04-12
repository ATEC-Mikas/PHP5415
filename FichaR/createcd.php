<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar CD</title>
</head>
<body>
    <form method="POST" action="/newcd.php">
    <p><input type="text" name="titulo" placeholder="Titulo"></p>
    <p><input type="number" name="ano" placeholder="Ano" min="1900" max="2020"></p>
    <p><input type="text" name="genero" placeholder="Genero"></p>
    <p><input type="text" name="musicos" placeholder="Musicos"></p>
        <p><input type="submit" value="Criar"></p>
    </form>
</body>
</html>