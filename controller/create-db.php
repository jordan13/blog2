<?php
     require_once(__DIR__ . "/../model/config.php");
     //  You are going back to the directory, to be directed to the model file.


     $query = $connection->query("CREATE TABLE posts ("
      . "id int(11) NOT NULL AUTO_INCREMENT,"
      . "title varchar(255) NOT NULL,"
      . "post text NOT NULL,"
      . "PRIMARY KEY  (id))");

       
    if($query) {
         echo "Succesfully created table: $posts";
    }
    else {
        echo "<p>$connection->error</p>";
    }

     // we are running a query on this database.
     // we are creating a table for posts.
     // this is a table that can store all the blog posts and save it on the data base.
     // we gived the id's numerical values
     // we have over a billion id's that we can generate
    // NOT NULL indicates that the blog post can not be empty
    // Auto increment it is going to increment the id numbers and it will handle the id's for us. The actual database handles it for us.    
    // we made a post column, and it can not be empty
  // since we are adding more than one id we need , 
  // Primary Key will let us select info from these posts, it is the way tables are connected to each other.
  // everything has to be set prior to being put in the table.