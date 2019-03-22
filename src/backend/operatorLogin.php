<?php

$servername = "172.17.0.1";
$username = "webuser";
$userpass = "webpass";
$dbname = "ism452";

$conn = new mysqli($servername, $username, $userpass, $dbname);

if($conn->connect_error){
  die("Connection Failed" . $conn->connect_error);
}

#echo "Connected to db! User: " . $username;

$sql="SELECT first_name FROM Customer WHERE cust_username='".$_POST['loginUName']."' AND cust_password='".$_POST['loginPass']."'";
// echo $sql . "<br>";

$result = $conn->query($sql);
$conn->close();

if ($result->num_rows == 1) {
    $user = "";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user = $row["first_name"];
    }

    //If there is a result then we have a successful login.
    //I know this is no where near secure but it should be functional
    setcookie("emp", $user, time()+86400, "/");

    //run script to redirect to the index page
    echo '<script type="text/javascript">window.location.href="../manage/manage.php"</script>';
} else {
    echo '<script type="text/javascript">window.location.href="../login.php?authFail"</script>';
}

?>
