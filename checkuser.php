<?php
    //session_start();
    if (isset($_SESSION['loginid']))
    {
        if ($_SESSION['usertype'] == "Customer")
        {
            //Customer Login Found!
        }
        else
        {
            header("Location: customerlogin.php");
        }
    }
    else
    {
        header("Location: customerlogin.php");
    }
?>