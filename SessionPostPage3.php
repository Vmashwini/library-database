<?php

 session_start();
 
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>logout page</title>
    </head>
    <body>
        <?php
         session_unset(); //it clears all the session variables.
   
        if(empty($_SESSION))
        {
            echo "Welcome Guest" . '<br>';

            echo "<a href='SessionPostPage1.php'>Home</a><br>";
        }
        session_destroy();

        ?>
    </body>
</html>
