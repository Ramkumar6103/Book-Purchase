<?php session_start(); ?>
<?php include("dbcon.php"); ?>
<?php include("top.php"); ?>
<h3>Books</h3>
<?php
    $bookid = $_GET['bookid'];
    $query = "select * from tabbooks where bookid='$bookid'";
    $result = mysql_query($query, $con);
    $record = mysql_fetch_array($result);
    $bookname = $record["bookname"];
    $author = $record["author"];
    $isbn = $record["isbn"];
    $category = $record["category"];
    $quantity = $record["quantity"];
    $language = $record["language"];
    $price = $record["price"];
    $offerprice = $record["offerprice"];
?>
<table>
    <tr>
        <td width="150">Book Name</td>
        <td width="200"><?php echo $bookname; ?></td>
    </tr>
    <tr>
        <td colspan="2"><img src="./images/<?php echo $bookid; ?>.jpg" /></td>
    </tr>
    <tr>
        <td>Author</td>
        <td><?php echo $author; ?></td>
    </tr>
    <tr>
        <td>ISBN</td>
        <td><?php echo $isbn; ?></td>
    </tr>
    <tr>
        <td>Category</td>
        <td><?php echo $category; ?></td>
    </tr>
    <tr>
        <td>Language</td>
        <td><?php echo $language; ?></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><?php echo $price; ?></td>
    </tr>
    <tr>
        <td>Offer Price</td>
        <td><?php echo $offerprice; ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <?php
                if (isset($_SESSION['loginid']))
                {
                    if ($_SESSION['usertype'] == "Customer")
                    {
                        echo '<a href="addtocart.php?bookid=' . $bookid . '&price=' . $offerprice . '">Add to Cart</a>';
                    }
                    else
                    {
                        echo '<font color="red">Login as Customer to Order the book.</font>';
                    }
                }
                else
                {
                    echo '<font color="red">Login to Order the book.</font>';
                }
            ?>
        </td>
    </tr>
</table>
<?php include("bottom.php"); ?>