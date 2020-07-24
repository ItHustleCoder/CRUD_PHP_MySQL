<?php
require_once     "../config/conect.php";
$id = $_GET['id'];
mysqli_query($connect,"DELETE FROM `products` WHERE `products`.`id` = $id");
header("Location: ../index.php");

?>