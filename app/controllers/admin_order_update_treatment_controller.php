<?php
    $order_id=$_POST['order_id'];
    $order_status=$_POST['order_status'];

    session_start();

    include '../models/database.php';
    include '../models/order.php';

    $updobject= new order();
    $state = $updobject -> order_update($db,$order_id,$order_status);

    header('location:admin_order_status_controller.php');
?>