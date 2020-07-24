<?php
require "../config/conect.php";
$id = $_POST['id'];
$body = $_GET['body'];
mysqli_query($connect, "INSERT INTO (`id`, `product_id`,`body`)VALUES(NULL,'$id','$body')");
header("Location: ../product.php?id=".$id);

?>