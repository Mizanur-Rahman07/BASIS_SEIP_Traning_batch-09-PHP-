<?php
namespace App\classes;

class Database{
    public $user;
    public $hostName;
    public $password;
    public $databaseName;
    public $conn;

    public function __construct(){
        $this->user ='root';
        $this->hostName ='localhost';
        $this->password ='';
        $this->databaseName ='seip_batch-09';
    }
    public function dbConnect(){
        $this->conn = mysqli_connect( $this->hostName, $this->databaseName, $this->user, $this->password );
        return $this->conn;

     if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    }
}