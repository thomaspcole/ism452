<?php
  include 'db.php';
  $db = new db;

  //echo $_GET["id"];
  $id = $_GET["id"];

  $sql = 'DELETE FROM productTest WHERE prod_id='.$id;
  $result = $db->queryDatabase($sql);
  if ($result === TRUE) {
   echo "Product with id: $id was removed successfully.\n";
  }
?>
