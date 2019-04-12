<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <style>
        div.row {
            width:100%;
        }
        div.col {
            display:inline-block;
            width: 30%;
            vertical-align: top;
        }
    </style>
</head>
<body>
    <div>   
        <div>
            <a href="/createlivro.php">Criar Livro</a>
            <a href="/createcd.php">Criar CD</a>
            <a href="/createfilme.php">Criar Filme</a>
            <a href="/createautor.php">Criar Autor</a>
            <a href="/createator.php">Criar Ator</a>
        </div>
        <h1>MediaTeca</h1>
        <div class="row">
            <div class="col">
        <?php
            require("indexlivros.php");
        ?>
            </div>
            <div class="col">
                
            <?php
            
                require("indexfilmes.php");

            ?>
                
            </div>

            <div class="col">
            <?php
            
                require("indexcds.php");

                ?>
            </div>
        </div>

    </div>
</body>
</html>

<?php $conn->close();?>