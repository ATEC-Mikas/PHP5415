<?php
            require __DIR__ . "/vendor/autoload.php";
            require_once("db/conn.php");

            use Microblog\Sugestao;
            $query = "Select * from Sugestao where Data='".date("Y-m-d")."';";
            $table = $conn->query($query);
            if($table->num_rows > 0) {
                while($row = $table->fetch_assoc()) {
                    $Sugestao = new Sugestao();
                    $Sugestao->format($row);
                    ?>
                    <div>
                        <p>
                            <?php echo $Sugestao->getTitulo();?> -
                            <strong><?php echo $Sugestao->getNome();?></strong> 
                            <?php echo $Sugestao->getData();?>
                        </p>    
                        <p><?php echo $Sugestao->getMensagem();?></p>
                        
                            
                    </div>

                    <?php
                }
            } else echo "Não existem sugestoes recentes";

?>