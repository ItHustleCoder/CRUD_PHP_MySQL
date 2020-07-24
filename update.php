<?php
    require_once 'config/conect.php';

    $product_id = $_GET['id'];
    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
    $product = mysqli_fetch_assoc($product);
   // print_r($product);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update product</title>
</head>
<body>
    <h3>Update Product</h3>
    <form action="vendor/update.php" method="post">
        <p>Titile</p>
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Descritption</p>

        <textarea name="desc" ><?= $product['description'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $product['price'] ?>"><br/><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
