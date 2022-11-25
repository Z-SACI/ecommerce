<?php
    include '../views/layout/header.php';
    $user_id=$_GET['user_id'];
    // echo $product_id;
    include '../models/database.php';
    include '../models/user.php';

    $getobject = new user();
    $user = $getobject -> user_getOne($db, $user_id);
    // var_dump($product);

    include '../views/admin_user_update_view.php';
    include '../views/layout/footer.php';
?>