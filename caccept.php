<?php
include('functions.php');

session_start();
$email = $_SESSION['semail'];

$query = "select * from `sponsorrequest` where `sponsorrequest`.`email` = '$email'; ";

if (count(fetchAll($query)) > 0) {
    foreach (fetchAll($query) as $row) {

        $email = $row['email'];
        $cemail  = $row['cemail'];
        $startupname = $row['startupname'];
        $share = $row['share'];
        $amount = $row['amount'];

        $query = "INSERT INTO `sponmessage` (`email`, `cemail`, `startupname`, `share`, `amount`) VALUES ( '$email', '$cemail', '$startupname', '$share', '$amount');";
    }
    $query .= "DELETE FROM `sponsorrequest` WHERE `sponsorrequest`.`cemail` = '$cemail' ";
    if (performQuery($query)) {
        echo "Account has been accepted.";
        echo "$email";
    } else {
        echo "Unknown error occured. Please try again.";
    }
} else {
    echo "Error occured.";
}

?>
<br /><br />
<a href="myrequests.php">Back to DashBoard</a>

<head>
    <link rel="icon" type="image/x-icon" href="../iii/images/sfs_new.png" />
    <h1 class="intro">Starter for Startups</h1>
    <img src="../iii/images/sfs_new.png" class="in">
</head>
<style>
    img.in {
        display: inline;
        border-radius: 100%;
        height: 40px;
        width: 50px;
        margin-left: -2px;
    }

    h1.intro {
        color: red;
        display: inline;
    }
</style>