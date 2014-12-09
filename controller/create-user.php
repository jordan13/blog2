<?php 
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	// in createpost we sanitize by string, but here we sanitize for the email to sanitize the email
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $passworod = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

    echo $email . " = " . $username . " = " . $password;