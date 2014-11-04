<?php 
     require_once(__DIR__ . "/../model/config.php");
     // we are accesing config.php
 ?>

<nav>

     <ul>
        <li><a href="<?php echo $path . "post.php" ?>"> Blog post form</a> </li>
       <!-- this is all we should have in our navigation.php file -->
       <!-- we only have one link and this link is the post.php file -->
     <!--  right now we are telling it to look at the root server folder aka the local host-->
    <!--  we are going to tell it the actual location of our post.php file -->
     <!--  there are no errors and everything is working correctly -->
     </ul>

</nav