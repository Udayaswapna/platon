<?php
include 'actioncontact.php';
if(isset($_POST['action']))
{
        $Name=  mysqli_real_escape_string($con,$_POST['Name']);
        $Contact= mysqli_real_escape_string($con,$_POST['Contact']);
        $Product= mysqli_real_escape_string($con,$_POST['Product']);
        $Email = mysqli_real_escape_string($con,$_POST['Email']);
        $Comment = mysqli_real_escape_string($con,$_POST['Comment']);
        $rate = mysqli_real_escape_string($con,$_POST['rate']);
          
       $query="insert into contactform(Name,Contact,Product,Email,Comment,rate) values('".$Name."','".$Contact."','".$Product."','".$Email."','".$Comment."','".$rate."')";
       $result = mysqli_query($con,$query);
       
      
       if($result) 
        {
            echo "inserted successfully";
        } 
        else
        {
            echo "\n data not inserted";
        }
}
?>
