<?php
    $user_un = $_POST['user_un'];
    $user_pw = $_POST['user_pw'];
    
    include '../models/database.php';
    include '../models/user.php';
 
    $admin = new user();
    $user_check = $admin ->user_check($db,$user_un,$user_pw);
    
    //var_dump($user_check);
    if($user_check){
        session_start();
        $_SESSION['role']=$user_check['user_role'];
        $_SESSION['userid']=$user_check['user_id'];
        $_SESSION['username']=$user_un;
        if ($user_check['user_role'] == 1){
            header("location:admin_home_controller.php");
        }
        else header("location:user_home_controller.php");
    }
    else{
        header('location:login_controller.php');
    }
?>