<?php

require_once 'config/conect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

$сomments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `product_id` = '$product_id' ");
$comments = mysqli_fetch_all();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <h2>Title: <?= $product['title'] ?></h2>
    <h4>Price: <?= $product['price'] ?></h4>
    <p>Description : <?= $product['description'] ?></p>

    <form action="vendor/createcoment.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <textarea name="body"></textarea>

        <button type="submit">Add comment</button>
    </form>

    <h3>Comments:</h3>
       <ul>
           <?php
           foreach($comments as $comment){
        ?>
       <li><?= $comment  ?></li>

    <?php
        }
    ?>
        </ul>
</body>
</html>
