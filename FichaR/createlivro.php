<?php
    require __DIR__ . "/vendor/autoload.php";
    //echo __DIR__ . "/vendor/autoload.php";
    use Ficha\Autor;

    require_once("db/conn.php");
    $query="select * from Autor";
    $table=$conn->query($query);
    if(!$table->num_rows>0) {
        die("<a href='/createautor.php'><h1>Tem de criar autores primeiro</h1></a>");
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Livro</title>
</head>
<body>
    <form method="POST" action="/newlivro.php">
        <p><input type="text" name="isbn" placeholder="isbn"></p>
        <p><input type="text" name="titulo" placeholder="Titulo"></p>
        <p><input type="text" name="genero" placeholder="Genero"></p>
        <?php
                while($row = $table->fetch_assoc()) {
                    $autor = new Autor();
                    $autor->format($row);
                    ?>
                    <p><input type="checkbox" name="autor[]" value="<?php echo $autor->id; ?>" required>
                    <?php echo $autor->nome;?>
                </p>

                    <?php
                }
                $conn->close();
        ?>
        <p><input type="submit" value="Criar"></p>
    </form>
</body>
</html>