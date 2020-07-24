<?php
    require_once "config/conect.php";

    //CRUD
    // CREATE +
    // READ +
    // UPDATE +
    // DELETE +

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
<style>
    th, td{
        padding: 10px;
    }
    th{
        background-color: #606060;
        color: #ffffff;
    }
    td {
        background: #b5b5b5;
     }
</style>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>

        </tr>

            <?php
            $products = mysqli_query($connect,"SELECT * FROM `products`");
            $products = mysqli_fetch_all($products);
            foreach ($products as $product){


            ?>
                <tr>
                    <td><?= $product[0]?></td>
                    <td><?= $product[1]?></td>
                    <td><?= $product[3]?></td>
                    <td><?= $product[2]?></td>
                    <td><a href="update.php?id=<?= $product[0]?>">Update</a></td>
                    <td><a style="color: red" href="vendor/delete.php?id=<?= $product[0]?>">Delete</a></td>
                    <td><a href="product.php?id=<?=  $product[0] ?>">View</a></td>
                </tr>

        <?php
            }
        ?>

    </table>
        <h3>Add New Product</h3>
        <form action="vendor/create.php" method="post">
            <p>Titile</p>
            <input type="text" name="title">
            <p>Descritption</p>
            <textarea name="desc" ></textarea>
            <p>Price</p>
            <input type="number" name="price"><br/><br>
            <button type="submit">Add new product</button>
        </form>

</body>
</html>