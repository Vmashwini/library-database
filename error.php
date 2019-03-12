<?php
session_start();
echo "<br><br><center><h2 style='color:purple'>".$_SESSION['errorMessage']."</h2></center>";
session_unset(); 