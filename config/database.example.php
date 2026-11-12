<?php

class database{
    private $host = "....";
    private $dbname = "ten_db";
    private $username = "root";
    private $password = "";

    private $conn;

    public function connection(){
        try{
        if(class_exists('PDO')){
            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->username,
                $this->password,
                $options
            );

            return $this->conn;
        
    }
    }catch(PDOException $e){
        die("Lỗi kết nối database: ".$e->getMessage());
    }
}
}
    


?>