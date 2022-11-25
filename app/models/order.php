<?php

class order{

    public function orders_getAll($db){
        $sql = $db -> prepare('SELECT * FROM orders
        join user on user.user_id = orders.order_user
        join status on status.status_id = orders.order_status');
        $sql -> execute();
        $rows = $sql -> fetchAll();
        return $rows;
    }
    public function orders_getIds($db,$user_id){
        $sql = $db -> prepare('SELECT * FROM orders
        WHERE orders.order_user=:user_id
        order by order_id desc');
        $sql -> bindValue(':user_id',$user_id);
        $sql -> execute();
        $rows = $sql -> fetchAll();
        return $rows;
    }
    public function orders_getOneOrd($db,$order_id){
        $sql = $db -> prepare('SELECT * FROM orders
        join user on orders.order_user=user.user_id
        join status on orders.order_status=status.status_id
        WHERE orders.order_id=:order_id');
        $sql -> bindValue(':order_id',$order_id);
        $sql -> execute();
        $rows = $sql -> fetch(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function order_status($db){
        $sql = $db -> prepare('SELECT * FROM status');
        $sql -> execute();
        $rows = $sql -> fetchAll();
        return $rows;
    }
    public function order_update($db,$order_id,$order_status){
        $sql = $db -> prepare('UPDATE orders SET order_status = :order_status 
        where order_id= :order_id');
            $sql -> bindValue(':order_id',$order_id);
            $sql -> bindValue(':order_status',$order_status);
            $sql -> execute();
            return $sql;
    }

    public function orders_view($db,$order_id){
        $sql = $db -> prepare('SELECT * FROM op
        join products on products.product_id=op.op_product
        join orders on orders.order_id=op.op_order
        join status on orders.order_status=status.status_id
        WHERE op_order=:order_id');
        $sql -> bindValue(':order_id',$order_id);
        $sql -> execute();
        $rows = $sql -> fetchAll();
        return $rows;
    }

}

?>