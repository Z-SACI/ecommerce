<?php
    include '../views/layout/header.php';
    include '../models/database.php';
    include '../models/order.php';
    
    $orderobj = new order();
    $orders = $orderobj -> orders_getAll($db);

    // var_dump($orders);
    include '../views/admin_order_status_view.php';
    include '../views/layout/footer.php';
?>