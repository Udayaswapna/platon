<?php
include 'dbtab.php';
if(isset($_POST['btn']))
{
$First_Name = mysqli_real_escape_string($con,$_POST['t1']);
$Last_Name =mysqli_real_escape_string($con,$_POST['t2']);



       $query="insert into tab(First_Name,Last_Name) values('".$First_Name."','".$Last_Name."')";
       $r= mysqli_query($con,$query);
if ($r)
{
echo "  inserted!!!...";
} 
else
{
echo " not inserted ";
}
} 
?>




      
       








