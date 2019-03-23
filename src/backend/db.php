<?php
class db{
  private $servername = "172.17.0.1";
  private $username = "webuser";
  private $userpass = "webpass";
  private $dbname = "ism452";
  private $conn;

  // Initialize a new connection to the database
  private function initConnection(){
    $this->conn = new mysqli($this->servername, $this->username, $this->userpass, $this->dbname);

    if($this->conn->connect_error){
      die("Connection Failed" . $this->conn->connect_error);
    }
  }

  //Close a connection when done
  private function closeConnection(){
    $this->conn->close();
  }

  //Query the database
  //Example usage:
  //include 'db.php';
  //$dbConn = new db;
  //$sql="SELECT * FROM table";
  //$result = $dbConn->queryDatabase($sql);
  public function queryDatabase($sqlStatement){
    $this->initConnection();
    $result = $this->conn->query($sqlStatement);
    return $result;
    $this->closeConnection();
  }

}
?>
