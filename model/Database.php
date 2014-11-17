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
}
