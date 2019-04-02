<?php
  include 'db.php';
  $db = new db;

  foreach ($_GET["ids"] as $key => $value) {
    //echo "Key: $key; Value: $value\n";
    $records = explode(",", $value);
    $sql = 'UPDATE productTest SET is_live='.$records[1].' WHERE prod_id='.$records[0];
    $result = $db->queryDatabase($sql);
    if ($result === TRUE) {
      echo "Product with id:$records[0] updated successfully.\n";
    }
  }
?>
