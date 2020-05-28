<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'ekampourakis';
$DATABASE_PASS = 'toor';
$DATABASE_NAME = 'crowd';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
mysqli_set_charset($con,"utf8");
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['name'], $_POST['surname'])) {
	// Could not get the data that should have been sent.
	die ('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty and valid.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	die ('Please complete the registration form');
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	die ('Email is not valid!');
}
if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
    die ('Username is not valid!');
}
$uppercase = preg_match('@[A-Z]@', $_POST['password']);
$number = preg_match('@[0-9]@', $_POST['password']);
$symbols = "!@#$%^&*()_+-=~{}[]|\?><,./:";
$symbol = strpbrk($_POST['password'], $symbols);
if (!$uppercase) { die ('Password must contain at least one uppercase letter!'); } 
if (!$number) { die ('Password must contain at least one number!'); } 
if (!$symbol) { die ('Password must contain at least one symbol!'); } 
if (strlen($_POST['password']) < 8) { die ('Password must be at least 8 characters long!'); }

// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT userid, password FROM users WHERE username = ? OR email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('ss', $_POST['username'], $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	$exists = $stmt->num_rows > 0;
	$stmt->close();
	// Store the result so we can check if the account exists in the database.
	if ($exists) {
		// Username already exists
		echo 'Username or email already exists, please choose another!';
	} else {
        // Insert new account
        // Username doesnt exists, insert new account
        if ($stmt = $con->prepare('INSERT INTO users (userid, username, password, email, firstname, lastname) VALUES (?, ?, ?, ?, ?, ?)')) {
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
            $password = md5($_POST['password']);
            $cipher = "aes-128-gcm";
            $iv = "random_bytes";
            $userid = openssl_encrypt($_POST['email'], $cipher, $_POST['password'], $options=0, $iv, $tag);
            $stmt->bind_param('ssssss', $userid, $_POST['username'], $password, $_POST['email'], $_POST['name'], $_POST['surname']);
			$stmt->execute();
			$stmt->close();
			echo 'You have successfully registered, you can now login!';
			header('Location: index.html');
			die();
        } else {
            // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        }
	}
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>