<p class="admintitle">ORDER LIST</p>
<table class="crud_table">
    <tr>
        <td><b>Product Reference</b></td>
        <td><b>Product Name</b></td>
        <td><b>Quantity</b></td>
        <td><b>Price</b></td>
    </tr>
    <?php foreach ($orders as $order){ ?>
    <tr>
        <td><?php echo $order['product_id']; ?></td>
        <td><?php echo $order['product_name']; ?></td>
        <td><?php echo $order['op_qtt']; ?></td>
        <td><?php echo $order['op_price']; ?></td>
    </tr>
    <?php }; ?>
</table>
<a href="admin_order_status_controller.php" class="button back"><- PREVIOUS</a>