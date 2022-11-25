<?php
    session_start();
    $product_id = $_GET['product_id'];
    include '../models/database.php';
    include '../models/products.php';

    $delobject= new products();
    $delete = $delobject -> product_delete($db,$product_id);
    //if ($delete) echo "banana";

    header("location:admin_product_list_controller.php");
?>