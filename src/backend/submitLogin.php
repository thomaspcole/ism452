<?php
include 'db.php';
$db = new db;
$sql="SELECT first_name FROM Customer WHERE cust_username='".$_POST['loginUName']."' AND cust_password='".$_POST['loginPass']."'";
$result = $db->queryDatabase($sql);

if ($result->num_rows == 1) {
    $user = "";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user = $row["first_name"];
    }

    //If there is a result then we have a successful login.
    //I know this is no where near secure but it should be functional
    setcookie("user", $user, time()+86400, "/");

    //run script to redirect to the index page
    echo '<script type="text/javascript">window.location.href="../index.php"</script>';
} else {
    echo '<script type="text/javascript">window.location.href="../login.php?authFail"</script>';
}
?>
