<p class="admintitle">My Orders</p>
<?php
    foreach($order as $value){
    $order_id=$value['order_id'];
    $order = $orderobj -> orders_view($db,$order_id);
    ?> <div class="div" style="border:1px solid black">
    <p class="ord"><b>ORDER DATE: </b> <?php echo $value['order_date']; ?></p>
    <table class="ordtab">
            <tr>
                <td><b>Produit</b></td>
                <td><b>Quantité</b></td>
                <td><b>Prix</b></td>
                <td><b>Status</b></td>
            </tr>
    <?php foreach($order as $ord){    ?>
        <tr>
                <td><?php echo $ord['product_name']?></td>
                <td><?php echo $ord['op_qtt']?></td>
                <td><?php echo $ord['op_price']?></td>
                <td class="stat"><?php echo $ord['status_name']?></td>
        </tr>
    
    <?php } ?></table></div> <?php }
    // var_dump($order);
?>
