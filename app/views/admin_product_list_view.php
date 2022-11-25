<p class="admintitle">PRODUCTS LIST</p>
<table class="crud_table">
    <tr>
        <td><b>Name</b></td>
        <td><b>Quantity</b></td>
        <td><b>Price</b></td>
        <td><b>Category</b></td>
        <td><b>Update</b></td>
        <td><b>Delete</b></td>
    </tr>
    <?php foreach ($product_list as $product){ ?>
    <tr>
        <td><?php echo $product['product_name']; ?></td>
        <td><?php echo $product['product_qtt']; ?></td>
        <td><?php echo $product['product_price']; ?></td>
        <td><?php echo $product['category_name']; ?></td>
        <td><a href="admin_product_update_controller.php?product_id=<?php echo $product['product_id']; ?>">Update</a></td>
        <td><a href="admin_product_delete_controller.php?product_id=<?php echo $product['product_id']; ?>">Delete</a></td>
    </tr>
    <?php }; ?>
</table>