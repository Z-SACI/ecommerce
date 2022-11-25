<?php
    $order_id = $_GET['order_id'];
    
    include '../views/layout/header.php';
    include '../models/database.php';
    include '../models/order.php';
    
    $orderobj = new order();
    $orders = $orderobj -> orders_view($db,$order_id);

    // var_dump($orders);
    include '../views/admin_order_details_view.php';
    include '../views/layout/footer.php';
?>