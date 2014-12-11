<h1> <center> News Feed </center> </h1>
<?php  
  	require_once(__DIR__ . "/controller/login-verify.php");
  	require_once(__DIR__ . "/view/header.php");
  	if(authenticateUser()) {
  	require_once(__DIR__ . "/view/navigation.php");
    }
  	require_once(__DIR__ . "/controller/create-db.php");
  	require_once(__DIR__ . "/view/footer.php");
  	require_once(__DIR__ . "/controller/read-posts.php");
 
    
  // The  DIR basically takes you back to the directory, and directs you to the controller file.
  // only thing in index.php
  // by adding the naviagtion file into here we have now implamented our new view
  // our link is now funcutional
?>

<!-- the reson why there is an if statement is because we want to make sure navigation only gets displayed based on if the user is logged in or not -->