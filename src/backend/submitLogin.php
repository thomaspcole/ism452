<?php
include 'db.php';

//tryCustomer
$db = new db;
$sql="SELECT * FROM Customer WHERE cust_username='".$_POST['loginUName']."' AND cust_password='".$_POST['loginPass']."'";
$result = $db->queryDatabase($sql);

if ($result->num_rows == 1) {
    $user = "";
    $id = "";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user = $row["first_name"];
        $id = $row["customer_id"];
    }

    //If there is a result then we have a successful login.
    //I know this is no where near secure but it should be functional
    setcookie("user", $user, time()+86400, "/");
    setcookie("id", $id, time()+86400, "/");

    //run script to redirect to the index page
    echo '<script type="text/javascript">window.location.href="../index.php"</script>';
    die();
}

//try employee
$db2 = new db;
$sql="SELECT * FROM Employee WHERE emp_username='".$_POST['loginUName']."' AND emp_password='".$_POST['loginPass']."'";
$result = $db2->queryDatabase($sql);

if ($result->num_rows == 1) {
    $user = "";
    $mgt = "";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user = $row["first_name"];
        $mgt = $row["is_manager"];
    }

    //If there is a result then we have a successful login.
    //I know this is no where near secure but it should be functional
    setcookie("emp", $user, time()+86400, "/");

    if ($mgt == 1) {
      setcookie("mgt", $user, time()+86400, "/");
    }


    //run script to redirect to the index page
    echo '<script type="text/javascript">window.location.href="../manage/manage.php"</script>';
    die();
}

//fail
echo '<script type="text/javascript">window.location.href="../login.php?authFail"</script>';
?>
