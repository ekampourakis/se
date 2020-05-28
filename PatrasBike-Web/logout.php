<?php

// Resume previous session
session_start();

// Kill the current session
session_destroy();

// Redirect to the login page
header('Location: index.html');

?>