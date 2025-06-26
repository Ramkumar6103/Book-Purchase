<?php
    $entryid = $_GET['entryid'];
    include("dbcon.php");
    $query = "update tabsold set status='Delivery' where entryid='$entryid'";
    mysql_query($query, $con);
    header("Location: bookssold.php");
?> 