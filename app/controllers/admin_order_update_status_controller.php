<?php
    include '../views/layout/header.php';
    $order_id=$_GET['order_id'];
    // echo $product_id;
    include '../models/database.php';
    include '../models/order.php';

    $getobject = new order();
    $order = $getobject -> orders_getOneOrd($db, $order_id);
    $status = $getobject -> order_status($db);

    // var_dump($status);

    include '../views/admin_order_update_status_view.php';
    include '../views/layout/footer.php'
?>