<?php
     require_once(__DIR__ . "/../model/config.php");
     //  You are going back to the directory, to be directed to the model file.

  $connection = new mysqli($host, $username, $password);
//  these variables are what you are checking for to have a succesful connection for.
  if($connection->connect_error) {
  	    die("<php>Error: " . $connection->connect_error . "</php>");
  	    // Checking for connection, and lets you know if there was an error
  	    // If there was an error the program will "die" or stop running
  }
  
    $exists = $connection->select_db($database);
    // we are trying to select the databse
    // $exists is the variable we want to use in our if, else statement.
    // we add the !, because we are telling it that it does not exist.
    // the exclamation point inverts the true to false
    
    if(!$exists) {
    // we are checking wether or not we were able to connect to that data base
           $query = $connection->query("CREATE DATABASE $database");
           // query's are basically questions, you send questions or commands to the database,
           // we are using SQL language in the parenthesis
           // normally the action words will be in upper case
           // php will encounter the variable and it will see that this is a variable and will substitute the text
           //  this query will be executed, and will say true if it was successful and false if it was not
    if($query) {
        // we are doing this becuase we want to output a message
            echo "<p> Succesfully created database: " . $database . "</php>"; 
              // we create this sentence and we use the dot operator to concatenate the databse
        }

    }

     else {
     	echo "<p>Database has already been created.</p>";
     	// lets you know that data base has been created and exists
     }
    
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

   $connection->close();
   // End of your connection variable