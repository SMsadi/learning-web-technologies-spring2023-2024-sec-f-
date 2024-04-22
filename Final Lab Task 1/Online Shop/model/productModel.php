<?php
    require_once('db.php');

    function show_products()
    {
        $conn = dbConnection();
        $sql = "select * from products";
        $result = mysqli_query($conn,$sql);
        $products = [];
        while ($product = mysqli_fetch_assoc($result)){
            array_push($products,$product);
        }
        return $products;
    }

    function deleteProduct($Id){
        $conn = dbConnection();
        $sql = "DELETE FROM products where id='{$Id}'";

        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return false;
        }
    }
?>