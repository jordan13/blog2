<?php 
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	// in createpost we sanitize by string, but here we sanitize for the email to sanitize the email
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $passworod = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

    echo $password;

    $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

    echo $salt;
    // we are telling it to use huge random numbers to create unique id's
    // uniqid creates unique ids for us and makes it random 
    // the minimum we should use is 5000 rounds
    // we are going to split this up because php reads the $'s as variables'
