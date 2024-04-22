<?php
    include_once('../controller/sessionCheck.php');
    require_once('../model/productModel.php');
    $products = show_products();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products list</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>Products Name</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Action</td>
        </tr>

        <?php for($i=0; $i<count($products); $i++){
            ?>
            <tr>
                <td><?=$products[$i]['id']?></td>
                <td><?php echo $products[$i]['product_name']?></td>
                <td><?php echo $products[$i]['quantity']?></td>
                <td><?php echo $products[$i]['price']?></td>
                <td>
                    <a href="editProduct.php?id=<?=$products[$i]['id']?>">Edit</a>
                    <a href="deleteProductController.php?id=<?=$products[$i]['id']?>">Delete</a>
                </td>
            </tr>
            <?php
        }?>

    </table><br>
    <a href="home.php"><button>Return home</button></a>
</body>
</html>