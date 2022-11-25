<?php
    session_start();
    include '../models/database.php';
    include '../models/products.php';
    include '../models/user.php';

    if(isset($_SESSION['cart'])){
        $username=$_SESSION['username'];

        $userobject = new user();
        $user = $userobject -> user_getId($db,$username);

        $order_date = date("Y/m/d");
        $order_price=$_GET['total'];
        $order_user = $user['user_id'];

        $orderobject = new products();
        $order = $orderobject -> product_order($db,$order_date,$order_price,$order_user);

        $last_id = $db->lastInsertId();
        
        $product_array_id= array_column($_SESSION['cart'],"product_id");
        foreach($product_array_id as $product){
            foreach($_SESSION['cart'] as $array => $value){
                if($value['product_id']==$product){
                    $op_product=$product;
                    $op_qtt = $value['product_qtt'];
                    $getobject = new products();
                    $product = $getobject -> product_getOne($db, $product); 
                    $op_price=$product['product_price'];
                }
            }
            $productobj = new products();
            $op = $productobj -> product_op($db,$op_qtt,$op_price,$last_id,$op_product);
        }
        unset($_SESSION['cart']);
        header('location:user_product_order_controller.php');
    }else{
        header('location:user_product_cart_controller.php');
    }
?>