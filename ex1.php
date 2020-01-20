
<?php
include('exdb.php');
if(isset($_POST['action']))
{
 
        $Name=  mysqli_real_escape_string($con,$_POST['Name']);
        $DOB = mysqli_real_escape_string($con,$_POST['DOB']);
        $Gender= mysqli_real_escape_string($con,$_POST['Gender']);
        $College = mysqli_real_escape_string($con,$_POST['College']);
        $Sem= mysqli_real_escape_string($con,$_POST['Sem']);  
        $USN = mysqli_real_escape_string($con,$_POST['USN']);
        $SkillSet= mysqli_real_escape_string($con,$_POST['SkillSet']);
       
       
       
        $checkbox1=$_POST['c'];
        $chk="";
        foreach ($checkbox1 as $chk1)
        {
            $chk.=$chk1.",";
        }
       $query="insert into exxx(Name,DOB,Gender,College,Sem,USN,SkillSet) values('".$Name."','".$DOB."','".$Gender."','".$College."','".$Sem."','".$USN."','".$chk."')";
       $result = mysqli_query($con,$query);
     
     
       if($SkillSet)
       {
           foreach ($SkillSet as $s) {
               mysqli_query($dbcon, $query);
               
           }
       }
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

