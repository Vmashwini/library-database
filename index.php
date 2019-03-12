b<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style=" background-color:lightskyblue ">
        <div style=" padding: 50px ">
    <center>
        <form action="UploadPage.php" method ="post" enctype="multipart/form-data">
            <input type ="hidden"  name="MAX_FILE_SIZE" value="1000000" />
            <input type="file" name="myfile" />
            <input type="submit" value="upload" />
        </form>
    </center>
        </div>
        <?php
        
        ?>
    </body>
</html>
