<?php
session_start();

const inputKey = 'myfile';
const AllowedTypes = ['text/xml'];
print_r($_FILES);

if(empty($_FILES[inputKey]))
{ 
    setMessageAndExit("File Missing");
}

if($_FILES[inputKey]['error']>0)
{
    setMessageAndExit(" Pleae select the file to upload!");
}
    
if(!in_array($_FILES[inputKey]['type'], AllowedTypes))
{ 
    setMessageAndExit(" This file type is not allowed!");
}

$filename = 'uploads/'.$_FILES[inputKey]['name'];

if (file_exists($filename)) 
{
    setMessageAndExit(" The file already exists...!");
} 
else 
{
    $tmpFile = $_FILES[inputKey]['tmp_name'];
    $dstFile = $filename;
    if (!move_uploaded_file($tmpFile, $dstFile))
    {          
        setMessageAndExit("File Handle Error");
    }

    if (file_exists($tmpFile))
    {

        unlink($tmp);
    }
    echo "<br><br><center><h2 style='color:purple'> File is uploaded successfully.</h2></center>";

}

function setMessageAndExit($msg)
{
    $_SESSION['errorMessage']= $msg;
    header("location: error.php");
    die();
}