
<html>
<head>
<title>Registration Form</title>

</head>
 
<body>
    <form action="reg.php" method="POST">
    <style>
        h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:center; 
  background-color: red; 
  border-collapse: collapse; 
  border: 2px black
}
table.inner{
  border: 0px
}
    </style>
<h3>REGISTRATION FORM</h3>

 
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>NAME</td>
<td><input type="text" name="Name" maxlength="30"/>
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
    <td>DOB</td>
      <td>  <input type="date" name="DOB" ></td>
</tr>
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
Others <input type="radio" name="Gender" value="Others" />
</td>
</tr>
 
<!----- Hobbies ---------------------------------------------------------->
 
<tr>
<td>Skill Set <br /><br /><br /></td>
 
<td>
Technical Person<br>

Java
<input type="checkbox" name="java" value="java" />
CSS
<input type="checkbox" name="css" value="css" />
PHP
<input type="checkbox" name="php" value="php" />
<br />
Non-Technical Person<br>

Sales
<input type="checkbox" name="sales" value="sales" />
Marketing
<input type="checkbox" name="marketing" value="marketing" />

</td>
</tr>
 

 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>

