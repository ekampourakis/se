<?php

// Resume the previous session
session_start();

// If the user is not logged in redirect to the login page
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>User Dashboard</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>PatrasEBike</h1>

				<!-- Navigation Bar -->
				<a href="user.php"><i class="selected fas fa-user"></i>Dashboard</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>User Dashboard</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>

			<?php

				// Include the database
				require('config.php');
				require('functions.php');
				// Resume the previous session
				session_start();
				// If the user is not logged in redirect to the login page
				if (!isset($_SESSION['loggedin'])) {
					header('Location: index.html');
					exit();
				}
				// ini_set('display_errors', 1);
				// ini_set('display_startup_errors', 1);
				// error_reporting(E_ALL);

			?>

		</div>
	</body>
</html>