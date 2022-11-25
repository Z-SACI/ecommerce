<?php
    session_start();
    $product_id = $_GET['product_id'];
    $product_name = $_POST['product_name'];
    $product_desig = $_POST['product_desig'];
    $product_price = $_POST['product_price'];
    $product_qtt = $_POST['product_qtt'];
    $product_cat = $_POST['product_cat'];
    
    include '../models/database.php';
    include '../models/products.php';

    $saveobject = new products();
    $save = $saveobject-> product_update($db,$product_id,$product_name,$product_desig,$product_price,$product_qtt,$product_cat);

    header('location:admin_product_list_controller.php');
?>