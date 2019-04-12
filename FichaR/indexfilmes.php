<?php
            require __DIR__ . "/vendor/autoload.php";
            require_once("db/conn.php");
            use Ficha\Filme;
            $query = "Select * from Filme;";
            $table = $conn->query($query);
            if($table->num_rows > 0) {
                while($row = $table->fetch_assoc()) {
                    $Filme = new Filme();
                    $Filme->format($row);
                    ?>
                    <div>
                        <a href="/filmes.php?id=<?php echo $Filme->id;?>"><h2>Filme : <?php echo $Filme->titulo; ?></h2></a>
                    </div>

                    <?php
                }
            } else echo "0 Filmes";

?>