<?php include("top.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Booking Successful</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f9fafb;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .success-container {
      background: #ffffff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      animation: fadeInUp 0.8s ease-in-out;
    }

    .success-icon {
      font-size: 60px;
      color: #10b981; /* Tailwind green-500 */
    }

    .success-title {
      font-size: 28px;
      font-weight: bold;
      color: #111827;
      margin-top: 20px;
    }

    .success-message {
      font-size: 16px;
      color: #4b5563;
      margin: 15px 0 30px;
    }

    .home-button {
      background-color: #10b981;
      color: white;
      border: none;
      padding: 12px 24px;
      font-size: 16px;
      border-radius: 8px;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .home-button:hover {
      background-color: #059669;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

  <div class="success-container">
    <div class="success-icon">✅</div>
    <div class="success-title">Booking Confirmed!</div>
    <div class="success-message">
      Thank you! Your booking was successful.<br>
      We look forward to seeing you!
    </div>
    <a href="index.php" class="home-button">Go to Homepage</a>
  </div>

</body>
</html>
	<?php
		include("showinfo.php");
		include("showerror.php");
        include("bottom.php");
	?>