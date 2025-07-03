<?php
    //session_start();
    if (isset($_SESSION['loginid']))
    {
        if ($_SESSION['loginid'] == "admin")
        {
            //Admin Login Found!
        }
        else
        {
            header("Location: adminlogin.php");
        }
    }
    else
    {
        header("Location: adminlogin.php");
    }
?>