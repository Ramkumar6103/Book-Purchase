<?php session_start(); ?>
<?php include("dbcon.php"); ?>
<?php include("checkuser.php"); ?>
<?php
    if (isset($_POST['btnCheckOut']))
    {
    //     $cardnumber = $_POST['txtCardNumber'] . $_POST['txtCCV'];
    //     $pin = $_POST['txtPIN'];

    //     $loginid = $_SESSION['loginid'];

    //     $address1 = $_POST['txtAddress1'];
    //     $address2 = $_POST['txtAddress2'];
    //     $address3 = $_POST['txtAddress3'];

    //     $query = "select * from tabbank where type='creditcard' and field1='$cardnumber' and field2='$pin'";
    //     // $result = mysql_query($query, $con);
	// 	    $result = $conn->query($query);

    //     if ($result->num_rows == 1)
    //     {
    //         $query = "select * from tabcart where loginid='$loginid'";
    //         // $result = mysql_query($query, $con);
	// 		    $result = $conn->query($query);
    //         while ($record = $result->fetch_assoc()) {
    //             $bookid = $record[2];
    //             $quantity = $record[3];
    //             $query = "insert into tabsold(loginid, bookid, quantity, address1, address2, address3, status) values('$loginid', '$bookid', '$quantity', '$address1', '$address2', '$address3', 'SOLD')";
    //             echo $query;
    //             // mysql_query($query, $con);
	// 			$result = $conn->query($query);
    //         }
    //     }
    //     if ($result->num_rows > 0)
    //     {
    //         $query = "delete from tabcart where loginid='$loginid'";
    //         // mysql_query($query, $con);
	// 		mysqli_query( $conn, $query);
    //         $info = "Books purchased successfully!";
    //         header("Location: cart.php");
    //     }
	header("Location: booking_success.php");
    }
?>
<?php include("top.php"); ?>
<h3>Check Out</h3>
<form method="post">
	<table class="login">
		<tr>
			<td>Debit Card Number</td>
			<td>
				<input type="text" class="txt" name="txtCardNumber" placeholder="Enter Card Number" />
			</td>
		</tr>
		<tr>
			<td>CCV</td>
			<td>
				<input type="text" class="txt" name="txtCCV" placeholder="Enter Card CCV" />
			</td>
		</tr>
        <tr>
			<td>PIN</td>
			<td>
				<input type="text" class="txt" name="txtPIN" placeholder="Enter Card PIN" />
			</td>
		</tr>
        <tr>
			<td>Address</td>
			<td>
				<input type="text" class="txt" name="txtAddress1" placeholder="Enter Address" />
			</td>
		</tr>
        <tr>
			<td></td>
			<td>
				<input type="text" class="txt" name="txtAddress2" placeholder="Enter Address" />
			</td>
		</tr>
        <tr>
			<td></td>
			<td>
				<input type="text" class="txt" name="txtAddress3" placeholder="Enter Address" />
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" class="btn" name="btnCheckOut" value="Check Out" />
			</td>
		</tr>
	</table>
	<?php
		include("showinfo.php");
		include("showerror.php");
	?>
</form>
<?php include("bottom.php"); ?>