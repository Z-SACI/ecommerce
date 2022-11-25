<form class="login_form register_form" action="admin_product_save_controller.php" method="post">
    <p class="logtitle">ADD NEW PRODUCT</p>
    <!-- <label for="">Product name</label> -->
    <input type="text" name="product_name" placeholder="Product Name"><br>
    <!-- <label for="">Designation</label> -->
    <input type="text" name="product_desig" placeholder="Designation" ><br>
    <!-- <label for="">Quantity</label> -->
    <input type="number" name="product_qtt" placeholder="Quantity"><br>
    <!-- <label for="">Price</label> -->
    <input type="text" name="product_price" placeholder="Price"><br>
    <!-- <label for="">Category</label> -->
    <select class="role" name="product_cat" id="">
        <option value="1">Accessories</option>
    </select>
    <button class="submit" type="submit">ADD PRODUCT</button>
</form>