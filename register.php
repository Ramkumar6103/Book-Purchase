<?php session_start(); ?>
<?php
	include("dbcon.php");
	$info = "";
	$errorinfo = "";
	if (isset($_POST['btnRegister']))
	{
		$username = $_POST['txtUsername'];
		$gender = $_POST['drpGender'];
		$mobile = $_POST['txtMobile'];
		$emailid = $_POST['txtEmailID'];
		$dob = $_POST['txtDOB'];
		$loginid = $_POST['txtLoginID'];
		$password = $_POST['txtPassword'];
		$confirmpassword = $_POST['txtConfirmPassword'];
		
		if ($password == $confirmpassword)
		{
			$query = "select * from tabusers where loginid='$loginid'";
			$result = mysqli_query( $conn, $query);
			if (mysqli_num_rows($result) == 0)
			{
				$query = "insert into tabusers (username, gender, mobile, emailid, dob, loginid, password) values ('$username', '$gender', '$mobile', '$emailid', '$dob', '$loginid', '$password')";
				mysqli_query($conn, $query);
				if (mysqli_affected_rows($conn) > 0)
				{
					$info = "Account created successfully!";
				}
			}
			else
			{
				$errorinfo = "Login ID already used. Please define different Login ID.";
			}
		}
		else
		{
			$errorinfo = "Password and confirm password not match.";
		}
	}
?>

<?php include("top.php"); ?>
<h3>Customer Registration</h3>
<form method="post">
	<table class="register">
		<tr>
			<td width="150">Name</td>
			<td width="150">
				<input type="text" class="txt" name="txtUsername" placeholder="Enter your name" />
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<select name="drpGender" class="txt">
					<option value="male">Male</option>
					<option value="male">Famale</option>
					<option value="male">Transgender</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Mobile</td>
			<td>
				<input type="number" class="txt" name="txtMobile" placeholder="Enter your mobile number" />
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="email" class="txt" name="txtEmailID" placeholder="Enter your Email ID" />
			</td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td>
				<input type="date" class="txt" name="txtDOB" placeholder="Enter your Date of Birth" />
			</td>
		</tr>
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
			<td>Confirm Password</td>
			<td>
				<input type="password" class="txt" name="txtConfirmPassword" placeholder="Enter your Password again" />
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" class="btn" name="btnRegister" value="Register" />
			</td>
		</tr>
	</table>
	<?php
		include("showinfo.php");
		include("showerror.php");
	?>
</form>
<?php include("bottom.php"); ?>
