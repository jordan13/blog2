 <?php 
     require_once(__DIR__ . "/../model/config.php");
      // we now have have acces to the path variable
 ?>

 <center>
 <h1> Create Blog Posts </h1>
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
 <!-- method is telling to send or recieve info -->
     <div>
       <label for="title">Title: </label>
       <input type="text" name="title" />
     </div>

     <div>
     <label for="post">Post: </label>
     <textarea name="post"></textarea>
     </div>

     <div>
      <button type="submit"> Submit </button>

     </div>
 </form>
 </center>
 <!-- we are creating a form -->
 <!--  we need sections for people to post things -->
 <!--  we are trying to align the names -->
 <!-- text area allows us to type more, almost no limit -->
 <!-- text area lets us expand the post box -->