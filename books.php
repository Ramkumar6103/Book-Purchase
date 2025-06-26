<?php session_start(); ?>
<?php include("dbcon.php"); ?>
<?php include("top.php"); ?>
<h3>Books</h3>
<?php
    $query = "select * from tabbooks";
    $result = $conn->query($query);
    if ($result->num_rows > 0)
    {
        echo '<div class="book_holder">';
        while ($record = $result->fetch_assoc())
{
    echo '<div class="book">';
        echo '<a href="viewbook.php?bookid='.$record['bookid']. '">';
            echo '<img src="./images/' . $record['bookid'] . '.jpg" />';
            echo '<br />';
            echo '<b>' . $record['bookname'] . '</b>';
            echo '<br />';
            echo '<s>Price: ' . $record['price'] . '</s>';
            echo '<br />';
            echo '<strong>Price: ' . $record['offerprice'] . '</strong>';
        echo '</a>';
    echo '</div>';
}

        echo '</div>';
    }
?>
<?php include("bottom.php"); ?>