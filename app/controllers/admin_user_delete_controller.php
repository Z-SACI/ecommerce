<?php
    session_start();
    $user_id = $_GET['user_id'];
    include '../models/database.php';
    include '../models/user.php';
    
    $delobject= new user();
    $delete = $delobject -> user_delete($db,$user_id);
    // if ($delete) echo "banana";

    header("location:admin_user_list_controller.php");
?>