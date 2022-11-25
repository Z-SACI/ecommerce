<?php
    class user{
        function user_check($db, $user_un, $user_pw){
            $sql = $db->prepare("select * from user WHERE user_un= :user_un and user_pw= :user_pw");
            $sql -> bindValue(':user_un',$user_un);
            $sql -> bindValue(':user_pw',$user_pw);
            $sql -> execute();
            $row = $sql-> fetch(PDO::FETCH_ASSOC);
            // if(count($row)>0){
            //     echo 'banana';
            // }
            // else echo "nupp";
            return $row;
        }

        public function users_getAll($db){
            $sql = $db -> prepare('select * from user join role on role.role_id=user.user_role');
            $sql -> execute();
            $rows = $sql -> fetchAll();
            return $rows;
        }

        public function user_delete($db, $user_id){
            $sql = $db -> prepare('delete from user where user_id = :user_id');
            $sql -> bindValue(':user_id',$user_id);
            $sql -> execute();
            return $sql;
        }
        
        public function user_getOne($db, $user_id){
            $sql = $db -> prepare('select * from user where user_id = :user_id');
            $sql -> bindValue(':user_id',$user_id);
            $sql -> execute();
            $rows = $sql -> fetch(PDO::FETCH_ASSOC);
            return $rows;
        }

        public function user_update($db,$user_id,$user_name,$user_lastname,$user_adress,$user_email,$user_number,$user_un){
            $sql = $db -> prepare('update user set user_name = :user_name, user_lastname = :user_lastname, user_adress = :user_adress, user_email = :user_email, user_number= :user_number, user_un= :user_un
            where user_id= :user_id');
            $sql -> bindValue(':user_id',$user_id);
            $sql -> bindValue(':user_name',$user_name);
            $sql -> bindValue(':user_lastname',$user_lastname);
            $sql -> bindValue(':user_adress',$user_adress);
            $sql -> bindValue(':user_email',$user_email);
            $sql -> bindValue(':user_number',$user_number);
            $sql -> bindValue(':user_un',$user_un);
            $sql -> execute();
            return $sql;
        }

        public function user_add($db,$user_name,$user_lastname,$user_adress,$user_email,$user_number,$user_un,$user_pw,$user_role){
            $sql = $db -> prepare('insert into user(user_name, user_lastname, user_adress , user_email, user_number, user_un, user_pw, user_role) VALUES 
                                                    (:user_name, :user_lastname, :user_adress , :user_email, :user_number, :user_un, :user_pw, :user_role)');
            $sql -> bindValue(':user_name',$user_name);
            $sql -> bindValue(':user_lastname',$user_lastname);
            $sql -> bindValue(':user_adress',$user_adress);
            $sql -> bindValue(':user_email',$user_email);
            $sql -> bindValue(':user_number',$user_number);
            $sql -> bindValue(':user_un',$user_un);
            $sql -> bindValue(':user_pw',$user_pw);
            $sql -> bindValue(':user_role',$user_role);
            $sql -> execute();
            return $sql;
        }

        public function user_getId($db, $user_un){
            $sql = $db -> prepare('select * from user where user_un = :user_un');
            $sql -> bindValue(':user_un',$user_un);
            $sql -> execute();
            $rows = $sql -> fetch(PDO::FETCH_ASSOC);
            return $rows;
        }

    }

?>