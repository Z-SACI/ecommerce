<?php
    include '../views/layout/header.php';
 
    include '../models/database.php';
    include '../models/order.php';
    
    $userid=$_SESSION['userid'];
    
    $orderobj= new order();
    $order = $orderobj -> orders_getIds($db,$userid);

    include '../views/user_product_order_view.php';
    include '../views/layout/footer.php';
?>