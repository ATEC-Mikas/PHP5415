<?php
    require __DIR__ . "/vendor/autoload.php";
    use Ficha\Ator;

    require_once("db/conn.php");
    $query="select * from Ator";
    $table=$conn->query($query);
    if(!$table->num_rows>0) {
        die("<a href='/createator.php'><h1>Tem de criar atores primeiro</h1></a>");
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Filme</title>
</head>
<body>
    <form method="POST" action="/newfilme.php">
    <p><input type="text" name="titulo" placeholder="Titulo"></p>
    <p><input type="number" name="ano" placeholder="Ano" min="1900" max="2020"></p>
    <p><input type="text" name="genero" placeholder="Genero"></p>
    <p><input type="text" name="estudio" placeholder="Estudio"></p>
    <p><input type="text" name="realizador" placeholder="Realizador"></p>
        <?php
                while($row = $table->fetch_assoc()) {
                    $ator = new Ator();
                    $ator->format($row);
                    ?>
                    <p><input type="checkbox" name="ator[]" value="<?php echo $ator->id; ?>" required>
                    <?php echo $ator->nome;?>
                </p>

                    <?php
                }
                $conn->close();
        ?>
        <p><input type="submit" value="Criar"></p>
    </form>
</body>
</html>