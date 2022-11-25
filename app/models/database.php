<?php
    class database {
        private $host="localhost";
        private $dbname="ecommerce";
        private $username="root";
        private $pw="";
    public function db_connect() {
        $dsn= "mysql:host=$this->host;dbname=$this->dbname";
        $db= new PDO($dsn, $this->username,$this->pw);
        // if($db) echo "connected";
        return $db;
    }
};
$db_object =new database();
$db = $db_object->db_connect();
?>