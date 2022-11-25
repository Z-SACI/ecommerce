    <p class="admintitle">ORDER STATUS UPDATE</p>
    <form class="login_form register_form" action="admin_order_update_treatment_controller.php" method="post">
    <p class="logtitle">UPDATE</p>
        <label for="">Order Reference</label>
        <input type="text" name="order_id" value="<?php echo $order['order_id'] ?>" readonly>
        <label for="">Recipient</label>
        <input type="text" value="<?php echo $order['user_un'] ?>" readonly>
        <label for="">Order Date</label>
        <input type="text" value="<?php echo $order['order_date'] ?>" readonly>
        <label for="">Order Price</label>
        <input type="text" value="<?php echo $order['order_price'] ?>" readonly>
        <label for="">Order Status</label>
        <select class="role" name="order_status" id="">
            <?php foreach($status as $state){ ?>
            <option value="<?php echo $state['status_id']; ?>"><?php echo $state['status_name']; ?></option>
            <?php } ?>
        </select>
        <button class="submit" type="submit">UPDATE STATUS</button>
    </form>