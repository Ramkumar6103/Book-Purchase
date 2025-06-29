<?php session_start(); ?>
<?php include("dbcon.php"); ?>
<?php include("top.php"); ?>
<h3>Cart</h3>
<?php
    $loginid = $_SESSION['loginid'];

    $query = "select * from tabcart where loginid='$loginid'";
    // $result = mysql_query($query, $con);
        $result = $conn->query($query);

    if (mysqli_num_rows($result) > 0)
    {
        echo '<table width="600" border="1" cellspacing="0" cellpadding="5">';
        echo '<tr>';
            echo '<th width="144">Book</th>';
            echo '<th>Quantity</th>';
            echo '<th>Price</th>';
            echo '<th>Remove</th>';
        echo '</tr>';
        $total_amount = 0;
        while ($record = mysqli_fetch_array($result))
        {
            echo '<td>';
                echo '<a href=viewbook.php?bookid=' . $record["bookid"] . '><img src="./images/' . $record['bookid'] . '.jpg" width="144" height="96" /></a>';
            echo '</td>';
            echo '<td align="center">' . $record['quantity'] . '</td>';
            echo '<td align="right">Rs. ' . $record['price'] . '</td>';
            $total_amount += $record['price'] * $record['quantity'];
            echo '<td align="center"><a href="removecart.php?bookid=' . $record['bookid'] . '">Remove</a></td>';
        }
        echo '<tr>';
            echo '<td colspan="2">Total Amount</td>';
            echo '<td align="right">Rs. ' . $total_amount . '</td>';
        echo '</tr>';
        echo '</table>';
        echo '<br /><br />';
        echo '<a href="checkout.php" class="btn">Check Out</a>';
    }
    else
    {
        echo '<font color="red">No Books in Cart.</font>';
    }
?>
<?php include("bottom.php"); ?>