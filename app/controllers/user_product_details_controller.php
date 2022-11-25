<?php
    $product_id=$_GET['product_id'];
    include('../views/layout/header.php');
    
    include '../models/database.php';
    include '../models/products.php';

    $getobject = new products();
    $product = $getobject -> product_getOne($db, $product_id);
    // var_dump($product);
    
    include('../views/user_product_details_view.php');
?>