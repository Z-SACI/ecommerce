<p class="admintitle"><?php echo $product['product_name']; ?></p>
<form class="login_form register_form" action="user_product_cart_treatment_controller.php" method="post">
    <p class="logtitle">Details</p>
    <label for="">Designation</label>
    <input type="text" placeholder="<?php echo $product['product_desig']; ?>" readonly>
    <label for="">Price</label>
    <input type="text" placeholder="<?php echo $product['product_price']; ?>" readonly>
    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
    <label>Quantity</label>
    <input type="number" name="product_qtt" value='1' min='1' max='<?php echo $product['product_qtt']; ?>' ></h4>
    <button class="submit" type="submit" name="add">ADD TO CART</button>
</form>