    <form class="login_form register_form" action="admin_user_saveupd_controller.php?user_id=<?php echo $user_id; ?>" method="POST">
        <p class="logtitle">UPDATE USER</p>
        <label for="">Name</label>
        <input type="text" name="user_name" value="<?php echo $user['user_name'] ?>">
        <label for="">Last name</label>
        <input type="text" name="user_lastname" value="<?php echo $user['user_lastname'] ?>">
        <label for="">Adress</label>
        <input type="text" name="user_adress" value="<?php echo $user['user_adress'] ?>">
        <label for="">e_mail</label>
        <input type="text" name="user_email" value="<?php echo $user['user_email'] ?>">
        <label for="">Number</label>
        <input type="text" name="user_number" value="<?php echo $user['user_number'] ?>">        
        <label for="">username</label>
        <input type="text" name="user_un" value="<?php echo $user['user_un'] ?>">
        <button class="submit" type="submit">UPDATE</button>
    </form>