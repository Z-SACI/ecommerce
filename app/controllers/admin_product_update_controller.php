<?php
    include '../views/layout/header.php';
    $product_id=$_GET['product_id'];
    // echo $product_id;
    include '../models/database.php';
    include '../models/products.php';

    $getobject = new products();
    $product = $getobject -> product_getOne($db, $product_id);
    // var_dump($product);

    include '../views/admin_product_update_view.php';
    include '../views/layout/footer.php'
?>