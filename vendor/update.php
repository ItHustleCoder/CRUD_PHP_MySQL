<?php
require "../config/conect.php";

$id = $_POST['id'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$desc' WHERE `products`.`id` = '$id'");
header("Location: ../index.php");

?>
