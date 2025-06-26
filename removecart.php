<?php
    session_start();

    $loginid = $_SESSION['loginid'];
    $bookid = $_GET['bookid'];

    include("dbcon.php");
    $query = "delete from tabcart where loginid='$loginid' and bookid='$bookid'";
    mysql_query($query, $con);
    header("Location: cart.php");
?>