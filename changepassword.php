<?php session_start(); ?>
<?php include("dbcon.php"); ?>
<?php include("checkuser.php"); ?>
<?php
    if (isset($_POST['btnUpdate']))
    {
        $loginid = $_SESSION['loginid'];
        $oldpassword = $_POST['txtOldPassword'];
        $query = "select * from tabusers where loginid='$loginid' and password='$oldpassword'";
        //$result = mysql_query($query, $con);
        $result = $conn->query($query);
        if ($result->num_rows == 1)
        {
            $newpassword = $_POST['txtNewPassword'];
            $confirmpassword = $_POST['txtConfirmPassword'];

            if ($newpassword == $confirmpassword)
            {
                $query = "update tabusers set password='$newpassword' where loginid='" . $loginid . "'";
                // mysql_query($query, $con);
                    $result = $conn->query($query);

                if ($result->num_rows > 0)
                {
                    $info = "Password update Successfully!";
                }
            }
            else
            {
                $errorinfo = "Password and Confirm Password does not match.";
            }
        }
        else
        {
            $errorinfo = "Invalid Old Password.";
        }
    }
?>

<?php include("top.php"); ?>
<h3>Change Password</h3>
<form method="post">
	<table class="login">
		<tr>
			<td>Old Password</td>
			<td>
				<input type="password" class="txt" name="txtOldPassword" placeholder="Enter your Old Password" />
			</td>
		</tr>
		<tr>
			<td>New Password</td>
			<td>
				<input type="password" class="txt" name="txtNewPassword" placeholder="Enter your New Password" />
			</td>
		</tr>
        <tr>
			<td>Confirm Password</td>
			<td>
				<input type="password" class="txt" name="txtConfirmPassword" placeholder="Enter your New Password Again" />
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" class="btn" name="btnUpdate" value="Update" />
			</td>
		</tr>
	</table>
	<?php
		include("showinfo.php");
		include("showerror.php");
	?>
</form>
<?php include("bottom.php"); ?>