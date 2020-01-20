<html>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <h3>STUDENT REGISTRATION FORM</h3>

 <form method="POST" action="reg.php">
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="t1" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="t2" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 <!----Dob ---------------------------------------------------------->
<tr>
<td>Date</td>
<td><input type="date" name="t3" maxlength="30"/>
</td>
</tr>



<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="t4" value="Male" checked>
Female <input type="radio" name="t4" value="Female" >
</td>
</tr>



 


<!----Dob ---------------------------------------------------------->
<tr>
<td>College</td>
<td><input type="text" name="t5" maxlength="10"/>

</td>
</tr>

<!---------------------semester-------------------->
<th>Select your Semester</th>

<td> 
<select id="semester" name="t6">

<option value="1" >1</option>
<option value="2" >2</option>
</select>
</td>
</tr>
<!----- USN ---------------------------------------------------------->

<script type="text/javascript">
    function func(USN)
    {
        var pattern1=/^[1-4]{4}[A-Z]{4}[0-9]{4}$/
        if(!USN.value.match(pattern1)||USN.value.length==0)
        {
            alert("invalid USN")
            return false;
        }
        else
            alert("USN valid");
    }
    </script>
     <tr><td>
    
        <p>
USN<input type="text" name="USN" maxlength="30"/>
<input type="button" value="validate" onclick="func(USN)"></p>

        
             </td>
</tr>



<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>Skillset <br /><br /><br /></td>
 
<td>

    
   <div class="container">
  
  <input type="checkbox"  name="t8" class="btn btn-info" data-toggle="collapse" data-target="#demo">Technical
  <div id="demo" class="collapse">  
      
      <input type="checkbox"  value="JAVA">Java<br>
<input type="checkbox"  value="PHP">PHP<br>
<input type="checkbox"  value="PYTHON">Python
   
      
      
  </div>
</div>

      
   

</td>
</tr>


<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" name="btn" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>


</table>
 
</form>


</body>
</html>
