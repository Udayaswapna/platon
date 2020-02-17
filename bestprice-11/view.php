<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>
    
    <?php
/*include "connection.php";
$query="SELECT * FROM images";
$result=mysql_query($query);*/
$con = mysqli_connect('localhost','root','','product') or die('Unable To connect');

if(isset($_POST["submit2"]))
{
   $res=mysqli_query($con,"select * from tbl_product");
    echo "<table>";
   echo "<tr>";
   
   while($value=mysqli_fetch_array($res))
{
    echo $value['name']." ";
       
          echo '<img src="data:image/jpg;base64,'.base64_encode($value['image']." " ).'" height="200" width="200"/>';
         echo $value['price']." "; 
          echo "<br>";
    
}
 echo "</tr>";
   echo "</table>";
}
?>