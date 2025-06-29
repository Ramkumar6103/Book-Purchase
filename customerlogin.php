<?php session_start(); ?>
<?php
	include("dbcon.php");
	$info = "";
	$errorinfo = "";
	if (isset($_POST['btnLogin']))
	{
		$loginid = $_POST['txtLoginID'];
		$password = $_POST['txtPassword'];
		
		
		$query = "select * from tabusers where loginid='$loginid' and password='$password'";
		$result = mysqli_query( $conn, $query);
		if (mysqli_num_rows($result) == 1)
		{
			$record = mysqli_fetch_array($result);
			$username = $record["username"];
			//Login Success
			$_SESSION['loginid'] = $loginid;
			$_SESSION['username'] = $username;
			$_SESSION['usertype'] = "Customer";
			header("Location: opendashboard.php");
		}
		else
		{
			$errorinfo = "Login Failed: Invalid Login ID or Password.";
		}
	}
?>

<?php include("top.php"); ?>
<h3>Customer Login</h3>
<form method="post">
	<table class="login">
		<tr>
			<td>Login ID</td>
			<td>
				<input type="text" class="txt" name="txtLoginID" placeholder="Enter your Login ID" />
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" class="txt" name="txtPassword" placeholder="Enter your Password" />
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" class="btn" name="btnLogin" value="Login" />
			</td>
		</tr>
	</table>
	<?php
		include("showinfo.php");
		include("showerror.php");
	?>
</form>
<?php include("bottom.php"); ?>
