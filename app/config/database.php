<?php 
    class Database {
        private $host = "localhost"; //"localhost" on xampp 
        private $database = "medical";  //database name
        private $user = "root"; //"root" on xampp 
        private $password = "12345"; //"" on xampp
        // private $port= "3306";

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host= $this->host; dbname= $this->database", $this->user, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
                echo "Database Connected....";
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>
