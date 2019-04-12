<?php

require __DIR__ . "/vendor/autoload.php";
require_once("db/conn.php");
use Ficha\Livro;
$query = "Select * from Livro;";
$table = $conn->query($query);
if($table->num_rows > 0) {
    while($row = $table->fetch_assoc()) {
        $livro = new Livro();
        $livro->format($row);
        ?>
        <div>
            <a href="/livros.php?id=<?php echo $livro->id?>"><h2>Livro : <?php echo $livro->titulo; ?></h2></a>
        </div>

        <?php
    }
} else echo "0 livros";

?>