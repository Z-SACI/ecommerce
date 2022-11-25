<p class="admintitle">PRODUCTS AVAILABLE</p>
<?php foreach($product_list as $product){?>
<div class ="prod" style="border:1px solid black;">
    <p class="prodname"><?php echo $product['product_name']?></p>
    <img src="../../public/assets/img/product.jfif" alt="">
    <p class="prodprice"><b>Price : </b><?php echo $product['product_price']?> DA</p><br>
    <a class="buttondet" href="user_product_details_controller.php?product_id=<?php echo $product['product_id']?>">Details</a>
</div>
<?php }?>