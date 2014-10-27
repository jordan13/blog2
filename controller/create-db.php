<?php
     require_once(__DIR__ . "/../model/database.php");
     //  You care going back to the directory, to be directed to the model file.

  $connection = new mysqli($host, $username, $password);

  if($connection->connect_error) {
  	    die("Error: " . $connectton->connect_error);

  }
   else {
     	echo "Success " . $connection->host_info;
   }

   $connection->close();