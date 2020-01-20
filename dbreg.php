<?php
include('db.php');
if(isset($_POST['action']))
{
    $Name=mysqli_real_escape_string($con,$_POST['Name']);
    $Email=mysqli_real_escape_string($con,$_POST['Email']);
    $contact=mysqli_real_escape_string($con,$_POST['contact']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    //$Confirmpassword=mysqli_real_escape_String($con,$_POST['confirmpassword']);
    
    
    
    //echo $Email;
    
    $query= "insert into registration(Name,Email,contact,password) values('".$Name."','".$Email."','".$contact."','".$password."')";
    $result = mysqli_query($con,$query);
    //$result = query(con->$query);
    //echo 'hai';
    //echo $result;
    
         if($result)
             {
                echo  "inserted successfully!! ";
              }
              else
              {
              echo "\n Data not inserted ";
              }
            
} 
?>
