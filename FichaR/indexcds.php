<?php
            require __DIR__ . "/vendor/autoload.php";
            require_once("db/conn.php");

            use Ficha\CD;
            $query = "Select * from CD;";
            $table = $conn->query($query);
            if($table->num_rows > 0) {
                while($row = $table->fetch_assoc()) {
                    $CD = new CD();
                    $CD->format($row);
                    ?>
                    <div>
                        <a href="/cds.php?id=<?php echo $CD->id;?>"><h2>CD : <?php echo $CD->titulo; ?></h2></a>
                    </div>

                    <?php
                }
            } else echo "0 CDs";

?>