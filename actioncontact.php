<?php
$con = mysqli_connect("localhost", "root", "");
if ($con)
{
    echo "dbConnected";
    mysqli_select_db($con,"platon");
} 
else
{
    echo "DB not Connected";
}
?>