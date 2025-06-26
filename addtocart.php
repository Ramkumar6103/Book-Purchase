<?php
    session_start();

    $loginid = $_SESSION['loginid'];
    $bookid = $_GET['bookid'];
    $price = $_GET['price'];

    include("dbcon.php");
    $query = "select * from tabcart where loginid='$loginid' and bookid='$bookid'";
    $result = mysql_query($query, $con);

    if (mysql_num_rows($result) == 0)
    {
        $query = "insert into tabcart (loginid, bookid, quantity, price) values('$loginid', '$bookid', '1', '$price')";
        mysql_query($query, $con);
        header("Location: cart.php");
    }
    else
    {
        $record = mysql_fetch_array($result);
        $quantity = $record['quantity'];
        $quantity++;
        $query = "update tabcart set quantity='$quantity' where loginid='$loginid' and bookid='$bookid'";
        mysql_query($query, $con);
        header("Location: cart.php");
    }
?>