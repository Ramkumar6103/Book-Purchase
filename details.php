<?php session_start(); ?>
<?php include("dbcon.php"); ?>
<?php include("checkadmin.php"); ?>
<?php include("top.php"); ?>
<h3>Deliver Details</h3>
<?php
    $entryid = $_GET['entryid'];
    $query = "select * from tabsold where entryid='$entryid'";
    $result = mysqli_query($conn, $query);
    $record = mysqli_fetch_array($result);
    $bookid = $record["bookid"];
    $quantity = $record["quantity"];
    $user = $record["loginid"];
    $address1 = $record["address1"];
    $address2 = $record["address2"];
    $address3 = $record["address3"];
    
    $query = "select * from tabbooks where bookid='$bookid'";
    $result2 = mysqli_query($conn, $query);
    $record2 = mysqli_fetch_array($result2);
    $bookname = $record2['bookname'];
    $price = $record2['offerprice'];

?>
<table>
    <tr>
        <td width="150">Book ID</td>
        <td><?php echo $bookid; ?></td>
    </tr>
    <tr>
        <td>Book Name</td>
        <td><?php echo $bookname; ?></td>
    </tr>
    <tr>
        <td>Quantity</td>
        <td><?php echo $quantity; ?></td>
    </tr>
    <tr>
        <td>Price</td>
        <td>Rs.<?php echo $price; ?></td>
    </tr>
    <tr>
        <td>User</td>
        <td><?php echo $user; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address1; ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo $address2; ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo $address3; ?></td>
    </tr>
</table>
<?php include("bottom.php"); ?>