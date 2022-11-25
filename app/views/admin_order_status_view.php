<p class="admintitle">ORDERS LIST</p>
<table class="crud_table">
    <tr>
        <td><b>Order Ref</b></td>
        <td><b>Username</b></td>
        <td><b>Date</b></td>
        <td><b>Price</b></td>
        <td><b>Status</b></td>
        <td><b>Change Status</b></td>
        <td><b>Details</b></td>
    </tr>
    <?php foreach($orders as $order){ ?>
        <tr>
        <td><?php echo $order['order_id'];?></td>
        <td><?php echo $order['user_un'];?></td>
        <td><?php echo $order['order_date'];?></td>
        <td><?php echo $order['order_price'];?></td>
        <td><?php echo $order['status_name'];?></td>
        <td><a href="admin_order_update_status_controller.php?order_id=<?php echo $order['order_id']; ?>">CHANGE</a></td>
        <td><a href="admin_order_details_controller.php?order_id=<?php echo $order['order_id']; ?>">VIEW</a></td>
        </tr>
    <?php } ?>

</table>