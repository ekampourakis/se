<?php

// Include the database
require('config.php');

// Start the session
session_start();

// Check if the data from the login form was submitted, isset() will check if the data exists
if (!isset($_POST['username'], $_POST['password'])) { die ('Please fill the username and password fields!'); }

// Prepare the SQL statement
if ($stmt = $con->prepare('SELECT userid, password, admin FROM users WHERE username = ?')) {

	// Bind the parameters and execute the query
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

	// Check if the username exists in the database
	if ($stmt->num_rows > 0) {

		// Load the 'userid', 'password' and 'type' of the account
		$stmt->bind_result($id, $password, $type);
		$stmt->fetch();
		// Terminate the SQL statement
		$stmt->close();

		// Verify the password
		if (md5($_POST['password']) === $password) {

			// Remember the login information for this session
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;

			// $con->close();

			// Go to the appropriate page based on the type of the account
			if ($type === 1) {
				// Go to the admin warning page
				header('Location: admin.php');
			} else {
				// Go to the user dashboard
				header('Location: user.php');
			}

		} else {
			die('Incorrect password!');
		}
	} else {
		die('Incorrect username!');
	}

}

?>