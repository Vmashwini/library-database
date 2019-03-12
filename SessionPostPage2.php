<?php

 session_start();
 
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>page2</title>
    </head>
    <body>
        <?php
        
        if(!empty($_SESSION))
            {
                echo "Hello " .$_SESSION['username'] . '<br>';
                echo "Your favourite colour is " . $_SESSION['color'] . '<br>';
                echo "Your favourite animal is " . $_SESSION['animal'] . '<br>';
                echo "<a href='SessionPostPage3.php'>Logout</a><br>";
            }
        
        ?>
    </body>
</html>
