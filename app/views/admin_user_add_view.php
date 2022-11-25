    <form class="login_form register_form" action="admin_user_save_controller.php" method="POST">
        <p class="logtitle">ADD NEW USER</p>
        <!-- <label for="">Role</label> -->
        <select class="role" name="user_role" id="">
            <option value="1">Admin</option>
            <option value="2">Customer</option>
        </select><br>
        <!-- <label for="">Name</label> -->
        <input type="text" name="user_name" placeholder="First Name" ><br>
        <!-- <label for="">Last name</label> -->
        <input type="text" name="user_lastname"placeholder="Last Name" ><br>
        <!-- <label for="">Adress</label> -->
        <input type="text" name="user_adress"placeholder="Adress" ><br>
        <!-- <label for="">e_mail</label> -->
        <input type="text" name="user_email" placeholder="E-Mail" ><br>
        <!-- <label for="">Number</label> -->
        <input type="text" name="user_number" placeholder="Phone Number"> <br>       
        <!-- <label for="">username</label> -->
        <input type="text" name="user_un" placeholder="Username" ><br>
        <!-- <label for="">Password</label> -->
        <input type="text" name="user_pw" placeholder="Password" ><br>
        
        <button class="submit" type="submit">ADD USER</button>
    </form>