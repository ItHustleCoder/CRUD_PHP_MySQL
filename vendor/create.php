<?php

    require_once "../config/conect.php";

    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];

    mysqli_query($connect,"INSERT INTO `products`(`id`,`title`,`price`,`description`)VALUES(NULL,'$title','$price','$desc')");
    header("Location: ../index.php");

?>
