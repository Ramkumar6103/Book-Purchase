<?php
	session_start();
	
	unset($_SESSION['loginid']);
	unset($_SESSION['username']);
	unset($_SESSION['usertype']);
	header("Location: index.php");
?>