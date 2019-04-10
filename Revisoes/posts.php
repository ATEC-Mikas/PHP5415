<?php
    if(!isset($_GET["post"]) || $_GET["post"]=="" || !is_numeric($_GET["post"])) header("location:index.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>

    <?php
    require __DIR__ . "/vendor/autoload.php";
    use Revisoes\Post;

    $conn = new mysqli("127.0.0.1","root","","blog");
    $query = "select * from posts where id=".$_GET["post"].";";

    $table = $conn->query($query);
    if($table->num_rows > 0) {
        $row = $table->fetch_assoc();
        $post = new Post();
        $post->formatPost($row);
        ?>
            <h1><?php echo $post->title?></h1>
            <p><?php echo $post->body?></p>
        <?php
    } else {
        echo "<b>404: Post not found!</b>";
    }
    ?>  
    
</body>
</html>