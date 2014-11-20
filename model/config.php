<?php
   require_once(__DIR__ . "/database.php");
   // we need to require once to link this file to the database
   // this one line is the path to all our project files
   // this now says that whenever we use the variable path, we are going to insert that part above
   $path = "/blog/";
   $host  = "localhost";
   $username = "root";
   $password = "root";
   $database = "blog_db";  
   // right now we are refactoring these variables
   // here in the connection variable we will have acces to the query function, open connection function, and the closed connection function
   // this database object will help us query the database
   $connection = new Database($host, $username, $password, $database);
