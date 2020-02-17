<html>
   <head>
       
       
<h1>ADD PRODUCT</h1>
<title> </title>
</head>
  
	<body >
		<form action="" method="POST">
			PRODUCT NAME : <input type="text" name="name" > <br><br>
            PRODUCT IMAGE : <input type="file" name="image" > <br><br>
            PRODUCT PRICE : <input type="number" name="price" > <br><br>
			<input type="submit" name="submit" value="Submit">
                           
<?php  
if(isset($_POST['submit']))  
{ 
    
    
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="product";//database name  
$tbl_name="tbl_product"; //table name  
$name=$_POST['name'];
$image=$_POST['image'];
$price=$_POST['price'];

$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  


$in_ch=mysqli_query($con,"insert into tbl_product (name,image,price) values ('$name','$image','$price')");  
if($in_ch==1)  
{
    ?>


                  	<div class="text-center">
    <?php
                      echo "<p> <font color=blue>New record is inserted sucessfully</font>";
    ?>
                      </div>
    <?php
                    }
                    else{
                        echo "Error: ". $sql ."". $conn->error;
                      }
                      
}  
?>  
		</form>
	</body>
</html>

 