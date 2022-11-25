<?php
    session_start();
    // echo $product_qtt=$_POST['product_qtt'];
    if(isset($_POST['add'])){
        // print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){
            $products_array_id= array_column($_SESSION['cart'],"product_id");
            $products_array_qtt= array_column($_SESSION['cart'],"product_qtt");
            // print_r($products_array_id);
            // print_r($products_array_qtt);

            if(in_array($_POST['product_id'],$products_array_id)){

                foreach($_SESSION['cart'] as $array => $value){
                    header('location:user_product_cart_controller.php');
                }
            }else{
                $count = count($_SESSION['cart']);
                $products_array=array(
                    'product_id'=>$_POST['product_id'],
                    'product_qtt'=>$_POST['product_qtt']
                );
                $_SESSION['cart'][$count]=$products_array;
                // print_r($_SESSION['cart']);
                header('location:user_product_cart_controller.php');
            }
            
        }else{
            $products_array=array(
                'product_id'=>$_POST['product_id'],
                'product_qtt'=>$_POST['product_qtt']
            );
            $_SESSION['cart'][0]=$products_array;
            // print_r($_SESSION['cart']);
            header('location:user_product_cart_controller.php');
        }
    }
    // print_r($_SESSION['cart']);


    if($_GET['action']=='remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['product_id']==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                header('location:user_product_cart_controller.php');
            }
        }
        
    }
?>