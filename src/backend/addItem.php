<?php
  include 'db.php';
  $db = new db;


  $sql = 'INSERT INTO productTest(name, description, price, is_live) VALUES()';
  $result = $db->queryDatabase($sql);
  if ($result === TRUE) {
   echo "Product with id: $id was added successfully.\n";
  }
?>
