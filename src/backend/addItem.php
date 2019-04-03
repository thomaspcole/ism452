<?php
  include 'db.php';
  $db = new db;

  $n = $_GET["name"];
  $d = $_GET["desc"];
  $p = $_GET["price"];

  $sql = "INSERT INTO productTest(name, description, price, is_live) VALUES('$n', '$d', $p, 0)";
  $result = $db->queryDatabase($sql);
  if ($result === TRUE) {
   echo "Product with name: $n was added successfully.\n";
  }

?>
