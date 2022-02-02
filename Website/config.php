<?php
// Database Connection 

class Connect extends PDO{

    public function __construct(){

        $servername = "localhost";
        $username = "root";
        $password = '';

        try{
            parent::__construct("mysql:host=$servername;dbname=r1", $username, $password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch(PDOException $e) {
            echo "Connection failed: ";
        }
    }
}
?>