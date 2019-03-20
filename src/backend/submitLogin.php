<?php

$servername = "172.17.0.1";
$username = "webuser";
$userpass = "webpass";

$conn = new mysqli($servername, $username, $userpass);

if($conn->connect_error){
  die("Connection Failed" . $conn->connect_error);
}

#echo "Connected to db! User: " . $username;

echo $_POST["loginUName"] . ", " . $_POST["loginPass"];

?>
