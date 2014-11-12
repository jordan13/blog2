<?php
      require_once(__DIR__ . "/..model/database.php");

      $connection = new mysqli($host, $username, $password, $database);
      // usually when we create a connection,, we run querries on it.
      //all of these parameters are found within data base.php
	 // the whole purpose of filter_input is to filter the input, to make sure there is no malicious things occuring with the input.
    $title =  filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    // post is filtering the post section
     echo "<p>Title: $title</p>";
      echo "<p>Post: $post</p>"; 

    // input post means that we are sending info.
    // we are telling that line where too link and filter the posts
    // this alone is not 100% secure
    // we have created a controller that is going to recieve our input and store it.
    // we are now echoing them out
   $connection->close();
   // right now we are closing the connection
   // we are just creating a new connection