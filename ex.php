

<html>
<head>
    <title>Registration</title>
</head>
<body>  
 
    <form action="ex1.php" method="post">
        Name: <input type="text" name="Name" /><br />
        DOB: <input type="date" name="DOB" /><br />
        Gender:
  <input type="radio" name="Gender" value="male" > Male<br>
  <input type="radio" name="Gender" value="female"> Female<br>
  <input type="radio" name="Gender" value="other"> Other
<br />
        College:
       
              <select id = "college" name="College" >
                 
               <option value = "MIT" >MIT,Mysore</option>
               <option value = "NIE">NIE,Mysore</option>
               <option value = "SJCE"> SJCE,Mysore</option>
               <option value = "JNNCE">JNNCE,Shivamogga</option>
               <option value = "DVS">DVS,Shivamogga</option>
             </select><br/>
             
         
         
        Sem :<p>
              <select id = "sem" name="Sem">
               <option value = "1" >1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
               <option value = "6">6</option>
             </select>
             
          </p>
          USN:<script type="text/javascript">
          function fun(USN)
          {
              var pattern=/^[0-9]{4}[A-Z]{4}[0-9]{4}$/
              if(!USN.value.match(pattern)||USN.value.length==0)
{
           alert("Invalid USN!\nEnter a valid USN!")
return false
}
            else
                alert("USN valid")
}
          }
          </script>  
          <input type="text" name="USN" /><br />
          
          
          Skill Set:
 
  <input type="checkbox" name="c" class="collapsible">Technical Person

  <p>
  <input type="checkbox" name="c[]" value="JAVA">Java<br>
  <input type="checkbox" name="c[]" value="CSS">CSS<br>
  <input type="checkbox" name="c[]" value="Bootsrap">Bootstrap<br>
  <input type="checkbox" name="c[]" value="PHP">PHP

</p>
 
  <input type="checkbox" name="c" class="collapsible" >Non Technical Person
 
    <p>
  <input type="checkbox" name="c[]" value="Marketing">Marketing<br>
  <input type="checkbox" name="c[]" value="Sales" >Sales<br>
 
</p>
 
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
<br/>
         
          <br/> <input type="submit" name="action" value="Register" />
       
    </form>
 
</body>
</html>
