<?php
class db{
  private $server = "localhost";
  private $dbuser = "root";
  private $dbpassword = "root";
  private $dbname="Travel";
  public $conn;

  public function dbconnector()  {
      $this->conn = new mysqli($this->server,$this->dbuser,$this->dbpassword,$this->dbname);
      return $this->conn;
  }

     

}

?>