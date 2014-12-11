<?php
	require_once(__DIR__ . "/../model/config.php");
	// this gives us access to our data base
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	// we put input post because our method is from post
	$password = filter_input (INPUT_POST, "username", FILTER_SANITIZE_STRING);

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
	// we are selecting our salt and our password from our users table where our username is the username that was sent in via the post