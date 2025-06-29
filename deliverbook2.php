<?php
    $entryid = $_GET['entryid'];
    include("dbcon.php");
    $query = "update tabsold set status='Delivered' where entryid='$entryid'";
    mysqli_query( $conn, $query);
    header("Location: deliverydetails.php");
?> 