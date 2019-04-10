<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <p>
        <a href="/newpost.php">Criar Post</a>
    </p>
    <h1>Blog</h1>

    <?php
        require __DIR__ . "/vendor/autoload.php";
        use Revisoes\Post;
        $conn = new mysqli("127.0.0.1","root","","blog");
        $query = "select * from posts";

        $table = $conn->query($query);
        if($table->num_rows > 0) {
            while($row = $table->fetch_assoc()) {
                $post = new Post();
                $post->formatPost($row);
                ?>
                    <a href="/posts.php?post=<?php echo $post->id;?>"><h2>
                        <?php echo $post->title;?>
                    </h2></a>
                <?php
            }
        } else {
        ?>
            <b>Não existem POSTS</b>
        <?php
        }
        $conn->close();
    ?>
</body>
</html>