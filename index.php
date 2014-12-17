<h1> <center id="news"> News Feed 
	<a href="https://twitter.com/?lang=en"><img src="images/tweet.png"></a> 
	<a href="https://www.facebook.com/"><img src="images/book.png"></a> 
	<a href="https://instagram.com/"><img src="images/instagram.png"></a> 
	<a href="https://mail.google.com/mail/"><img src="images/g.png"></a> 
</center> </h1> 
<hr> </hr> 
<div class="container"> 
	<img src="images/pic.jpg" class="term5" > 
	<h3> <right>  Bob Bobert </right> </h3>
	<br> <p> <h2> <top> Bio: </top> </h2> </br> </p>
	<p> <h4> The Name is Bob Bobert, this is my profile. I like to eat pizza and I like chickens. </h4> </p>
</div>
<?php  
  	require_once(__DIR__ . "/controller/login-verify.php");
  	require_once(__DIR__ . "/view/header.php");
  	if(authenticateUser()) {
  	require_once(__DIR__ . "/view/navigation.php");
    }
  	require_once(__DIR__ . "/controller/create-db.php");
  	require_once(__DIR__ . "/controller/read-posts.php");
  	require_once(__DIR__ . "/view/footer.php");
 
    
  // The  DIR basically takes you back to the directory, and directs you to the controller file.
  // only thing in index.php
  // by adding the naviagtion file into here we have now implamented our new view
  // our link is now funcutional
?>
<!-- the reson why there is an if statement is because we want to make sure navigation only gets displayed based on if the user is logged in or not -->
