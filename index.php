<h1> <center> News Feed </center> </h1>
<?php  
  	require_once(__DIR__ . "/view/header.php");
  	require_once(__DIR__ . "/view/navigation.php");
  	require_once(__DIR__ . "/controller/create-db.php");
  	require_once(__DIR__ . "/view/footer.php");
  	require_once(__DIR__ . "/controller/read-posts.php");
 
    
  // The  DIR basically takes you back to the directory, and directs you to the controller file.
  // only thing in index.php
  // by adding the naviagtion file into here we have now implamented our new view
  // our link is now funcutional
?>

