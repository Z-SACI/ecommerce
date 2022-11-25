<?php
    session_start();
    echo $product_name = $_POST['product_name'];
    echo $product_desig = $_POST['product_desig'];
    echo $product_price = $_POST['product_price'];
    echo $product_qtt = $_POST['product_qtt'];
    echo $product_cat = $_POST['product_cat'];

    include '../models/database.php';
    include '../models/products.php';

    $saveobject= new products();
    $save = $saveobject->product_add($db,$product_name,$product_desig,$product_price,$product_qtt,$product_cat);
    // if($save) echo 'banana';

    header('location:admin_product_list_controller.php');
?>