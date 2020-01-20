<?php
include('db.php');
if(isset($_POST['submit']))
{
    $Email=mysqli_real_escape_String($con,$_POST['Email']);
    $password=mysqli_real_escape_String($con,$_POST['password']);
    
    $strSQL=mysql_query($con,"select * from registration where Email='".$Email."' and password='".$password."'");
    $Results = mysqli_fetch_array($strSQL);
         if(count($Results)>=1)
             {
                echo  ' login successfully!! ';
              }
              else
              {
              echo '\n Invalid email or password!! ';
              }
            
} 
?>
