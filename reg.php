<?php
include 'db1.php';
if(isset($_POST['btn']))
{
$First_Name =mysqli_real_escape_string($con,$_POST['t1']);
$Last_Name =mysqli_real_escape_string($con,$_POST['t2']);
$Dob =mysqli_real_escape_string($con,$_POST['t3']);
$Gender =mysqli_real_escape_string($con,$_POST['t4']);
$College =mysqli_real_escape_string($con,$_POST['t5']);
$Semester =mysqli_real_escape_string($con,$_POST['t6']);
$Usn =mysqli_real_escape_string($con,$_POST['USN']);
$Skillset =mysqli_real_escape_string($con,$_POST['t8']);


 $query="insert into form(First_Name,Last_Name,Dob,Gender,College,Semester,Usn,Skillsset)
          values('$First_Name','$Last_Name','$Dob','$Gender','$College','$Semester','$Usn','$Skillset')";
       $result = mysqli_query($con,$query);
 
if($result)
{
echo "  inserted!!!...";
} 
else
{
echo " not inserted ";
}
} 
?>

