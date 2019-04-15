<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MicroBlog</title>
    <style>
    
        div.row {
            width: 100%;
        }

        div.col {
            width: 40%;
            margin:0 auto;
            display: inline-block;
            vertical-align: top;
        }
        span.muted {
            font-size: 12px;
            font-weight: lighter;
        }
    </style>
</head>
<body>
    <h1>Micro Blog 
    <span class="muted">By AiTec</span></h1>
    <p>
        <a href="create/mensagem.php">Criar Mensagem</a>
        <a href="create/sugestao.php">Criar Sugestao</a>
    </p>
    <p>
        <a href="list/mensagem.php">Listar Mensagens</a>
        <a href="list/sugestao.php">Listar Sugestoes</a>
    </p>
    
    <div class="row">
            <div class="col">
                <h3>Mensagens de Hoje</h3>
                <?php require("mensagemrecente.php"); ?>
            </div>
            <div class="col">
                <h3>Sugestoes de Hoje</h3>
                <?php require("sugestaorecente.php");?>
            </div>
    </div>

</body>
</html>


