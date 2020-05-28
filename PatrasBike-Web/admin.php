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
		<title>Admin Dashboard</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>PatrasEBike</h1>

				<!-- Navigation Bar -->
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Admin Dashboard</h2>
			<p>Please use the Admin GUI to access the administrator functionality.</p>
		</div>
	</body>
</html>