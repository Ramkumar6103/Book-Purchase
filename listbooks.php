<?php session_start(); ?>
<?php include("dbcon.php"); ?>
<?php include("top.php"); ?>
<h3>List Books</h3>
<?php
    $query = "select * from tabbooks";
    $result = mysqli_query( $conn, $query);

    if (mysqli_num_rows($result) > 0)
    {
        echo '<table width="600" border="1" cellspacing="0" cellpadding="5">';
        echo '<tr>';
            echo '<th width="144">Book</th>';
            echo '<th>Quantity</th>';
            echo '<th>Price</th>';
        echo '</tr>';
        $total_amount = 0;
        while ($record = mysqli_fetch_array($result))
        {
            $bookid = $record["bookid"];
            $price = $record["price"];
            $quantity = $record['quantity'];
            echo '<td>';
                echo '<a href=viewbook.php?bookid=' . $bookid . '><img src="./images/' . $bookid . '.jpg" width="144" height="96" /></a>';
            echo '</td>';
            echo '<td align="center">' . $quantity .'</td>';
            echo '<td align="right">Rs. ' . $price . '</td>';
            $total_amount += $record['price'] * $record['quantity'];
        }
        echo '</table>';
        echo '<br /><br />';
    }
    else
    {
        echo '<font color="red">No Books in Current Orders.</font>';
    }
?>
<?php include("bottom.php"); ?>