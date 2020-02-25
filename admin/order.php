<?php
$conn=mysqli_connect('localhost', 'root', '', 'product' );
$query="SELECT * FROM order_details";
$result = mysqli_query($conn,$query);
?>


<html>
    <head>
      
    </head>
<body>
   
  <center>  <table width="1200" border="1" cellpadding="2" cellspacing="2">
           <h1>Order details</h1>
       <tr> 
           <th>id</th>
            <th>fname</th>
            <th>lname</th>
            <th>company</th>
            <th>addr1</th>
            <th>addr2</th>
            <th>city</th>
            <th>state</th>
            <th>country</th>
            <th>zip</th>
            <th>cno</th>
            <th>email</th>
            <th>product</th>
            <th>amount</th>
        </tr>
            
<?php

while($order_details=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$order_details['id']."</td>";
    echo "<td>".$order_details['fname']."</td>";
    echo "<td>".$order_details['lname']."</td>";
    echo "<td>".$order_details['company']."</td>";
    echo "<td>".$order_details['addr1']."</td>";
    echo "<td>".$order_details['addr2']."</td>";
    echo "<td>".$order_details['city']."</td>";
    echo "<td>".$order_details['state']."</td>";
    echo "<td>".$order_details['country']."</td>";
    echo "<td>".$order_details['zip']."</td>";
    echo "<td>".$order_details['cno']."</td>";
    echo "<td>".$order_details['email']."</td>";
    echo "<td>".$order_details['product']."</td>";
    echo "<td>".$order_details['amount']."</td>";
    
        echo "</tr>";

}
?>
   </table></center>

</body>
</html>

