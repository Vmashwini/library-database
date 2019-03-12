<?php

 session_start();
 
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
        <title>Home</title>
        
    </head>
    <body>
        
        <link href="logincss.css" rel="stylesheet" type="text/css">
        
            <header id="header"> Welcome to Login Page </header>
            <br>
            <br><br>
        
        <div id="form1">
            <center>
            <form action="" method="POST" >
                Username: <input type="text" placeholder="username" name="username" required="" />
                Password: <input type="password" name="password" placeholder="Password" required="" />
                Colour: <input type="text" name="color" />
                Animal: <input type="text" name="animal" /><br><br><br>
                <input type="submit" value="Login" />
                <input type="checkbox" name="remember" value="1"> Remember Me
            </form></center>
        </div>
        <?php
       
        if(!empty($_POST))
        {
            $_SESSION["username"] = $_POST['username'];
            $_SESSION["color"] = $_POST['color'];
            $_SESSION["animal"] = $_POST['animal'];
        }
        if(!empty($_SESSION))
        {
            echo "Welcome " .$_SESSION['username'] . '<br>';
            echo "Your favourite colour is " . $_SESSION['color'] . '<br>';
            echo "Your favourite animal is " . $_SESSION['animal'] . '<br>';
            echo "<a href='SessionPostPage2.php'>Go to page 2</a><br>";
        }
      
        ?>
    </body>
</html>
