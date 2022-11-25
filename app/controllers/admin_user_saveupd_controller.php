<?php
    session_start();
    $user_id = $_GET['user_id'];
    $user_name = $_POST['user_name'];
    $user_lastname = $_POST['user_lastname'];
    $user_adress = $_POST['user_adress'];
    $user_number = $_POST['user_number'];
    $user_email = $_POST['user_email'];
    $user_un = $_POST['user_un'];
    
    include '../models/database.php';
    include '../models/user.php';

    $saveobject = new user();
    $save = $saveobject-> user_update($db,$user_id,$user_name,$user_lastname,$user_adress,$user_email,$user_number,$user_un);
    // if($save) echo 'banana';

    header('location:admin_user_list_controller.php');
?>