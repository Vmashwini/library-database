<?php

$myusername = "ash.man@gmail.com";
$mypass = "123qwe";

if(isset($_POST['Login']))
{
    $user_name = $_POST['username'];
    $pass = $_POST['password'];
    if($user_name==$myusername and $pass==$mypass)
    {   
        if(isset($_POST['remember']))
            {
                setcookie('username',$user_name.time()+60*60*24);
            }
            session_start();
            header("location: SessionPostPage2.php");
            
    } 
    else
    {
        echo "Username or Password is invalid"; 
    }
    
} 
else 
{
    header("location:SessionPostPage1.php");  
}