<?php
    $entryid = $_GET['entryid'];
    include("dbcon.php");
    $query = "update tabsold set status='Delivery' where entryid='$entryid'";
    mysqli_query( $conn, $query);
    header("Location: bookssold.php");
?> 