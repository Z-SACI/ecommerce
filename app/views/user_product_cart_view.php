<p class="admintitle">CART</p>
<?php if(isset($_SESSION['cart'])){
        if(count($_SESSION['cart'])>0){?>

<table class="crud_table">
    <tr>
        <td>Name</td>
        <td>quantity</td>
        <td>Price</td>
        <td>Category</td>
        <td>Remove</td>
    </tr>
    <?php 
    $products_array_id= array_column($_SESSION['cart'],"product_id");
    foreach ($products_array_id as $productId){
        $product_id = $productId;
        $getobject = new products();
        $product = $getobject -> product_getOne($db, $product_id); 
        ?>
    <tr>
        <td><?php echo $product['product_name']; ?></td>
        <td><?php 
        foreach($_SESSION['cart'] as $array => $value){
            if($value['product_id']==$product_id){
                ?> <input type="number" name="" id="" min="1" max="<?php echo $product['product_id'];?>" value="<?php echo $product_qtt=$value['product_qtt'];?>"> <?php
            }
        }
         ?></td>
        <td><?php echo $product['product_price']; ?></td>
        <td><?php echo $product['product_cat']; ?></td>
        <td><a class="x" href="user_product_cart_treatment_controller.php?action=remove&id=<?php echo $product_id; ?>">Remove X</a></td>
    </tr>
    <?php 
    $total = $total + $product['product_price']*$product_qtt;
}; ?>
</table>
<div class="total">
    <p><b>Price Details : </b> <?php echo $total; ?></p>
    <p><b>Items Quantity : </b>  <?php echo count($_SESSION['cart']);?></p>
    <?php 
    if(count($_SESSION['cart'])>0){?>
        <a class="buttondet" href="user_product_order_treatment_controller.php?total=<?php echo $total; ?>">Order</a>
    <?php }
    ?>
    
</div>
<?php }else{?>
    <div class="empty">
        <img class="cart" src="../../public/assets/img/emptycart.png" alt="">
    </div>
<?php }
}else{ ?>
    <div class="empty">
        <img class="cart" src="../../public/assets/img/emptycart.png" alt="">
    </div>
   
<?php } ?>