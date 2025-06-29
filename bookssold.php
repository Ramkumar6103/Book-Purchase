<?php session_start(); ?>
<?php include("dbcon.php"); ?>
<?php include("checkadmin.php"); ?>
<?php include("top.php"); ?>
<h3>Current Orders</h3>
<?php
    $loginid = $_SESSION['loginid'];

    $query = "select * from tabsold where status='SOLD'";
    // $result = mysql_query($query, $con);
        $result = $conn->query($query);

    if ($result->num_rows > 0)
    {
        echo '<table width="600" border="1" cellspacing="0" cellpadding="5">';
        echo '<tr>';
            echo '<th width="144">Book</th>';
            echo '<th>Quantity</th>';
            echo '<th>Price</th>';
            echo '<th>User</th>';
            echo '<th>Deliver</th>';
        echo '</tr>';
        $total_amount = 0;
        while ($record = $result->fetch_assoc())
        {
            $bookid = $record["bookid"];
            
            // $record2 = mysql_fetch_array(mysql_query("select offerprice, quantity from tabbooks where bookid='$bookid'"));
            $query2 = "select offerprice, quantity from tabbooks where bookid='$bookid'";
            $record2 = $result->fetch_assoc();
            $price = $record2[0];
            $quantity = $record['quantity'];
            echo '<td>';
                echo '<a href=viewbook.php?bookid=' . $bookid . '><img src="./images/' . $bookid . '.jpg" width="144" height="96" /></a>';
            echo '</td>';
            echo '<td align="center">' . $quantity .'</td>';
            echo '<td align="right">Rs. ' . $price . '</td>';
            $total_amount += $record['price'] * $record['quantity'];
            echo '<td align="center">' . $record["loginid"] .'</td>';
            echo '<td align="center"><a href="deliver.php?entryid=' .$record[0] .'">Deliver</td>';
        }
        echo '</table>';
        echo '<br /><br />';
    }
    else
    {
        echo '<font color="red">No Books in Order History.</font>';
    }
?>
<?php include("bottom.php"); ?>