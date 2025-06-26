<?php session_start(); ?>
<?php include("dbcon.php"); ?>
<?php include("checkuser.php"); ?>

<?php include("top.php"); ?>
<h3>Check Out</h3>
<p>Select Payment Method:</p>
<ol>
    <li><a href="debitcard.php">Debit Card</a></li>
    <li><a href="creditcard.php">Credit Card</a></li>
    <li><a href="netbanking.php">Net Banking</a></li>
</ol>
<?php include("bottom.php"); ?>