<?php
    $entryid = $_GET['entryid'];
    include("dbcon.php");
    $query = "update tabsold set status='Delivered' where entryid='$entryid'";
    mysql_query($query, $con);
    header("Location: deliverydetails.php");
?> 