<?php
include('functions.php');

$id = "0";
$query = "DELETE FROM `requests` WHERE `requests`.`id` = '0' ";
if (performQuery($query)) {
    echo "Account has been rejected.";
} else {
    echo "Unknown error occured. Please try again.";
}

?>
<br /><br />
<img class="in" src="../iii/images/sfs_new.png" />
<div class="absolute">
    <h1>Starter for Startups</h1>
</div>
<style>
    div.absolute {
        color: goldenrod;
        position: relative;
        font-size: 20px;
        top: -30px;
        left: 20px;
    }

    img.in {
        position: relative;
        border-radius: 100%;
        height: 90px;
        width: 90px;
        left: 4px;
        top: 0px;
    }
</style>
<a href="home.php">Back To dashboard</a>