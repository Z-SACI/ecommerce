<table border 1px black>
    <tr>
        <td>Name</td>
        <td>quantity</td>
        <td>Price</td>
        <td>Category</td>
        <td>Plus</td>
    </tr>
    <?php foreach ($product_list as $product){ ?>
    <tr>
        <td><?php echo $product['product_name']; ?></td>
        <td><?php echo $product['product_qtt']; ?></td>
        <td><?php echo $product['product_price']; ?></td>
        <td><?php echo $product['product_cat']; ?></td>
        <td><a href="user_product_details_controller.php?product_id=<?php echo $product['product_id']?>">Details</a></td>
    </tr>
    <?php }; ?>
</table>