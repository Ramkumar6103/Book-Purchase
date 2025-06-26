<html>
    <head>
        <title>Good Verbs - Online Book Store</title>
        <link href="./style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="page">
            <!-- Header -->
            <div class="header">
                <div class="logo">
                    <img src="./logo.png" alt="logo" />
                </div>
                <div class="user_control">
                    <?php 
						if (isset($_SESSION['loginid']))
						{
							echo "Welcome " . $_SESSION['username'];
							echo '<br />';
                            if ($_SESSION["usertype"] == "Customer")
                            {
                                echo '<a href="cart.php">Cart</a> | ';

                            }
							echo '<a href="opendashboard.php">Dashboard</a> | <a href="logout.php">Logout</a>';
						}
						else
						{
							echo "Welcome Guest";
						}
					?>
                </div>
            </div>
            <!-- /Header -->

            <!-- Nav -->
            <div class="nav">
                <a href="index.php">Home</a>
                <a href="books.php">Books</a>
                <a href="register.php">Customer Registration</a>
                <a href="customerlogin.php">Customer Login</a>
                <a href="adminlogin.php">Admin Login</a>
                <a href="contact.php">Contact</a>
            </div>
            <!-- /Nav -->

            <!-- Content -->
            <div class="content">
                <div class="content_left">