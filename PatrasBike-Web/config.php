<?php

// Database credentials
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'ekampourakis';
$DATABASE_PASS = 'toor';
$DATABASE_NAME = 'patrasebike';

// Try and connect
$con = mysqli_connect('localhost', $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
mysqli_set_charset($con,"utf8");
// If there is an error with the connection, stop the script and display the error.
if (mysqli_connect_errno()) { die ('Failed to connect to MySQL: ' . mysqli_connect_error()); }

?>