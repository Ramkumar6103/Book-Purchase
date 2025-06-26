<?php
	session_start();
	$usertype = $_SESSION['usertype'];
	
	if ($usertype == "Customer")
	{
		header("Location: customerdashboard.php");
	}
	if ($usertype == "Librarian")
	{
		header("Location: admindashboard.php");
	}
?>