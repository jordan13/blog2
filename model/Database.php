<?php
class Database {
// when we set this to private it means we can only access this variable in this file
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
// we have created instance variables and global variables, we have also set the visibility
// we wont be able to access these variables in any other file, only in these classes
// this way when we create a new object, these variables are hidden and nobody else can access them and modify them
// adding these classes makes the code easier to maintiain and easier to read
        

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    // the reason why it is public, is so you can access it in any file
    // we are putting all the info from the database to the construct function
    // the "this" variable is accessing the host variable up above with the private
    // we are joining all of these functions together

     public function openConnection() { 
     	// the only thing open connection has to do is it needs to create a new my sqli object and it checks if there is a connection error
        // the only thing going on in open connection is we are only checking for a connection going on.
        // if there is an error it will exit the program and let us know what the error is 
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
     
        if ($this->connection->connect_error) {
  	         die("<p>Error: " . $this->connection->connect_error . "</php>"); 
  	    }
     }

     public function closeConnection() {
      // the whole purpose of this function is to close the connection that we opened up above in the open connection
      // the reason we are doing this is because we want to make sure we can open the connection first and if there is no connection the program will then close  
      // we are checking if the variable is set, it is checking whether or not there is info set in the varianble
      // it will retrun as NULL if there is no info in the connection 
      // we now close the connection at the end 
         if(isset ($this->connection))  {
             $this->connection->close();
         }
     }

     public function query($string) {
        
      }
}
