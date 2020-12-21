<?php

//echo 'db file called'; 
$con = mysqli_connect("localhost","root","") or die("DB not connected");
mysqli_select_db($con,"task") or die("DB not found");
?>