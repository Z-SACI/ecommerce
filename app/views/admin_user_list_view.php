<p class="admintitle">USERS LIST</p>
<table class="crud_table">
    <tr>
        <td><b>Name</b></td>
        <td><b>Last name</b></td>
        <td><b>Adress</b></td>
        <td><b>E-mail</b></td>
        <td><b>Number</b></td>
        <td><b>Username</b></td>
        <td><b>Role</b></td>
        <td><b>Update</b></td>
        <td><b>Delete</b></td>
    </tr>
    <?php foreach ($users as $user){ ?>
    <tr>
        <td><?php echo $user['user_name']; ?></td>
        <td><?php echo $user['user_lastname']; ?></td>
        <td><?php echo $user['user_adress']; ?></td>
        <td><?php echo $user['user_email']; ?></td>
        <td><?php echo $user['user_number']; ?></td>
        <td><?php echo $user['user_un']; ?></td>
        <td><?php echo $user['role_name']; ?></td>
        <td><a href="admin_user_update_controller.php?user_id=<?php echo $user['user_id']; ?>">Update</a></td>
        <td><a href="admin_user_delete_controller.php?user_id=<?php echo $user['user_id']; ?>">Delete</a></td>
    </tr>
    <?php }; ?>
</table>