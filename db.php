<?php
$con = mysqli_connect("localhost","root", "");
//$con = new mysqli("localhost","root" , "");
if($con)
{
    echo "dbConnected";
        mysqli_select_db($con,"platon");
    
}
 else {
    echo "db not connected";
}
?>