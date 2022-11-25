<?php

    class products {

        public function products_getAll($db){
            $sql = $db -> prepare('SELECT * from products join category on products.product_cat=category.category_id');
            $sql -> execute();
            $rows = $sql -> fetchAll();
            return $rows;
        }

        public function product_delete($db, $product_id){
            $sql = $db -> prepare('delete from products where product_id = :product_id');
            $sql -> bindValue(':product_id',$product_id);
            $sql -> execute();
            return $sql;
        }
        
        public function product_getOne($db, $product_id){
            $sql = $db -> prepare('select * from products where product_id = :product_id');
            $sql -> bindValue(':product_id',$product_id);
            $sql -> execute();
            $rows = $sql -> fetch(PDO::FETCH_ASSOC);
            return $rows;
        }

        public function product_update($db,$product_id,$product_name,$product_desig,$product_price,$product_qtt,$product_cat){
            $sql = $db -> prepare('UPDATE products SET product_name = :product_name, product_desig= :product_desig, product_price = :product_price, product_qtt = :product_qtt, product_cat= :product_cat
            where product_id= :product_id');
            $sql -> bindValue(':product_id',$product_id);
            $sql -> bindValue(':product_name',$product_name);
            $sql -> bindValue(':product_desig',$product_desig);
            $sql -> bindValue(':product_price',$product_price);
            $sql -> bindValue(':product_qtt',$product_qtt);
            $sql -> bindValue(':product_cat',$product_cat);
            $sql -> execute();
            return $sql;
        }

        public function product_add($db,$product_name,$product_desig,$product_price,$product_qtt,$product_cat){
            $sql = $db -> prepare('INSERT INTO products(product_name,product_desig,product_qtt,product_price,product_cat) VALUES 
                                (:product_name,:product_desig,:product_qtt,:product_price,:product_cat)');
            $sql -> bindValue(':product_name',$product_name);
            $sql -> bindValue(':product_desig',$product_desig);
            $sql -> bindValue(':product_price',$product_price);
            $sql -> bindValue(':product_qtt',$product_qtt);
            $sql -> bindValue(':product_cat',$product_cat);
            $sql -> execute();
            return $sql;
        }
        
        public function product_order($db,$order_date,$order_price,$order_user){
            $sql = $db -> prepare('INSERT INTO orders(order_date,order_price,order_status,order_user) VALUES 
                (:order_date,:order_price,1,:order_user)');
            $sql -> bindValue(':order_date',$order_date);
            $sql -> bindValue(':order_price',$order_price);
            $sql -> bindValue(':order_user',$order_user);
            $sql -> execute();
            return $sql;
        }

        public function product_op($db,$op_qtt,$op_price,$op_order,$op_product){
            $sql = $db -> prepare('INSERT INTO op(op_qtt,op_price,op_order,op_product) VALUES 
                (:op_qtt,:op_price,:op_order,:op_product)');
            $sql -> bindValue(':op_qtt',$op_qtt);
            $sql -> bindValue(':op_price',$op_price);
            $sql -> bindValue(':op_order',$op_order);
            $sql -> bindValue(':op_product',$op_product);
            $sql -> execute();
            return $sql;
        }

    }
?>