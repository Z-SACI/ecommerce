<style>
    a{
        display:inline-block;
        margin:1%;
        
    }
</style>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="../../public/assets/css/style.css">
    </head>
    <body>
        <header>
            <img class="logo" src="../../public/assets/img/logo.png" alt="logo">
            <nav>
                <ul id="menu">
                    <?php
                        session_start();

                        if(!$_SESSION){ ?>
                            <!-- <li><a href='home_controller.php' >HOME</a></li> -->
                            <li><a class="log" href='login_controller.php' >LOGIN</a></li>
                        <?php }
                        else{
                            if ($_SESSION['role']==2){
                                if(isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                } else{$count=0;} ?>
                                <!-- <li><a href='home_controller.php' >HOME</a></li> -->
                                <li><a href='user_home_controller.php' >SHOP</a></li>
                                <li><a href='user_product_cart_controller.php' >CART <?php echo $count; ?></a></li>
                                <li><a href='user_product_order_controller.php' >ORDERS</a></li>
                                <li><a class="log" href='logout_controller.php' >LOGOUT</a></li>
                            <?php } else{ ?>
                                <!-- <li><a href='home_controller.php' >HOME</a></li> -->
                                <li><a href='admin_home_controller.php' >MANAGE</a></li>
                                <li><a class="log" href='logout_controller.php' >LOGOUT</a></li>
                            <?php }
                        }
                    ?>
                </ul>
            </nav>
        </header>
        <div class="content">