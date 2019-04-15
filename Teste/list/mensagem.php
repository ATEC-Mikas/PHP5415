<?php
            require __DIR__ . "/../vendor/autoload.php";
            require_once("../db/conn.php");

            use Microblog\Mensagem;
            $query = "Select * from Mensagem;";
            $table = $conn->query($query);
            if($table->num_rows > 0) {
                while($row = $table->fetch_assoc()) {
                    $Mensagem = new Mensagem();
                    $Mensagem->format($row);
                    ?>
                    <div>
                        <p>
                            <?php echo $Mensagem->getTitulo();?> - 
                            <strong><?php echo $Mensagem->getNome();?></strong> 
                            <?php echo $Mensagem->getData();?>
                        </p>    
                        <p><?php echo $Mensagem->getMensagem();?></p>            
                    </div>

                    <?php
                }
            } else echo "Não existem mensagens atualmente";

?>