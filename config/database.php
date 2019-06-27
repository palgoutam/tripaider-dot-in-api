<?php
Class Database{
	/* Database connection start */
	var $host = "localhost";
	var $username = "banes";
	var $password = "123456";
	var $db_name = "tripaide";
	var $conn;
	public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}

?>
