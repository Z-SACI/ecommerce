<?php

    $user_role = 2;
    $user_name = $_POST['user_name'];
    $user_lastname = $_POST['user_lastname'];
    $user_adress = $_POST['user_adress'];
    $user_number = $_POST['user_number'];
    $user_email = $_POST['user_email'];
    $user_un = $_POST['user_un'];
    $user_pw = $_POST['user_pw'];

    include '../models/database.php';
    include '../models/user.php';

    $saveobject= new user();
    $save = $saveobject->user_add($db,$user_name,$user_lastname,$user_adress,$user_email,$user_number,$user_un,$user_pw,$user_role);
    if($save) echo 'banana';

    //  header('location:user_list_controller.php');
?>