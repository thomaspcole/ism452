<?php
  include 'db.php';
  $db = new db;

  $n = $_GET["name"];
  $d = $_GET["desc"];
  $p = $_GET["price"];

  $sql = "UPDATE productTest SET name='$n' description='$d' price=$p is_live=0)";
  $result = $db->queryDatabase($sql);
  if ($result === TRUE) {
   echo "Product with name: $n was updated successfully.\n";
  }

?>
