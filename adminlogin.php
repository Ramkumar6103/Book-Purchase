<?php session_start(); ?>
<?php
	$info = "";
	$errorinfo = "";
	if (isset($_POST['btnLogin']))
	{
		$loginid = $_POST['txtLoginID'];
		$password = $_POST['txtPassword'];
		
		
		if ($loginid == "book" && $password == "book")
		{
			//Login Success
			$_SESSION['loginid'] = "admin";
			$_SESSION['username'] = "Librarian";
			$_SESSION['usertype'] = "Librarian";
			header("Location: opendashboard.php");
		}
		else
		{
			$errorinfo = "Login Failed: Invalid Login ID or Password.";
		}
	}
?>

<?php include("top.php"); ?>
<h3>Librarian Login</h3>
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
