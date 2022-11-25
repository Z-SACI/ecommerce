    <p class="admintitle">UPDATE PRODUCT</p>
    <form class="login_form register_form" action="admin_product_saveupd_controller.php?product_id=<?php echo $product['product_id']; ?>" method="POST">
        <p class="logtitle">UPDATE</p>
        <label for="">Product name</label>
        <input type="text" name="product_name" value="<?php echo $product['product_name'] ?>">
        <label for="">Designation</label>
        <input type="text" name="product_desig" value="<?php echo $product['product_desig'] ?>">
        <label for="">Quantity</label>
        <input type="text" name="product_qtt" value="<?php echo $product['product_qtt'] ?>">
        <label for="">Price</label>
        <input type="text" name="product_price" value="<?php echo $product['product_price'] ?>">
        <label for="">Category</label>
        <select class="role" name="product_cat" id="">
            <option value="<?php echo $product['product_cat'] ?>">Accessories</option>
        </select>
        <button class="submit" type="submit">UPDATE</button>
    </form>