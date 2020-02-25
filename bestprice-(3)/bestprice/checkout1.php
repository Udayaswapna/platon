<?php
session_start();
if($_SESSION["shopping_cart"]) {
    $total = 0;  
    foreach($_SESSION["shopping_cart"] as $keys => $values) 
    {
    $total = $total + ($values["product_quantity"] * $values["product_price"]);
    
    if(isset($_POST['place_order']))  
    {
$fname  = filter_input(INPUT_POST,'fname');
$lname  = filter_input(INPUT_POST,'lname');
$company   = filter_input(INPUT_POST,'company');
$addr1      = filter_input(INPUT_POST,'addr1');
$addr2    = filter_input(INPUT_POST,'addr2');
$city    = filter_input(INPUT_POST,'city');
$state    = filter_input(INPUT_POST,'state');
$country    = filter_input(INPUT_POST,'country');
$zip    = filter_input(INPUT_POST,'zip');
$cno    = filter_input(INPUT_POST,'cno');
$email    = filter_input(INPUT_POST,'email');



  if(!empty($fname) || !empty($lname)  || !empty($addr1) || !empty($addr2) ||!empty($city) || !empty($state) ||!empty($country) || !empty($zip) || !empty($cno) || !empty($email)) {

      $host     =   "localhost";
      $username  = "root";
      $word  = "";
      $db_name  = "product";

      $connect=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");
      $sql = "INSERT INTO order_details (fname,lname,company,addr1,addr2,city,state,country,zip,cno,email,product,amount) values ('$fname','$lname','$company','$addr1','$addr2','$city','$state',' $country','$zip','$cno','$email','$values[product_name]','$total')";
         if ($connect->query($sql)){
    ?>


                  	<div class="text-center">
    <?php
                      
                      echo "<p> <font color=blue> ORDERED sucessfully</font>";


    ?>
                      </div>
    <?php
                    }
                    else{
                        echo "Error: ". $sql ."". $connect->error;
                      }
                      $connect->close();
        }
    }
}
}
session_destroy();
  
	?>
