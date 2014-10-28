<?php
     require_once(__DIR__ . "/../model/database.php");
     //  You are going back to the directory, to be directed to the model file.

  $connection = new mysqli($host, $username, $password);
//  these variables are what you are checking for to have a succesful connection for.
  if($connection->connect_error) {
  	    die("Error: " . $connectton->connect_error);
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
              echo " Succesfully created datbase; " . $database; 
              // we create this sentance and we use the dot operator to concatenate the databse
        }

    }



   $connection->close();
   // End of your connection variable