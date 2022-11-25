<?php
    include '../views/layout/header.php';
    include '../models/database.php';
    include '../models/user.php';

    $userobj = new user();
    $users = $userobj -> users_getAll($db);

    // if ($users) echo "banana";
    // var_dump($users);

    include '../views/admin_user_list_view.php';
    include '../views/layout/footer.php';
?>