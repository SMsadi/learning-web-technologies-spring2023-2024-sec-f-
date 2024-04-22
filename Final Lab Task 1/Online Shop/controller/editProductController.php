<?php
    include_once('../model/db.php');

    $Id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $conn = dbConnection();
    $query = "UPDATE  products SET product_name = '{$product_name}', quantity = '{$quantity}', price = '{$price}' where id='{$Id}'";
    if(mysqli_query($conn,$query))
    {
        echo "success";
    } else{
        echo "failed";
    }
?>