
<html>  
<head>
<title>Contact Form</title>
<center> <u> <h1> Contact form</h1></u></center>
<style>
    *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
</style>
</head>

<body>  
<form action="dbcontact.php" method="post">
        
        <!---------------------------------------------Name---------------------------------------------->
    Name: <input type="text" name="Name" placeholder="Name" required /><br>
        <br>
        
        <!---------------------------------------------contact---------------------------------------------->
   
         Contact: <input type="tel" name="Contact" maxlength="10" placeholder="contact" required><br>
        <br>
        <!---------------------------------------------product name---------------------------------------------->
    Product Name: <p>
        <select id = "Product" name="Product">
               <option value = "Biscuits" >Biscuits</option>
               <option value = "Chocolate">Chocolates</option>
               <option value = "Ice cream">Ice Cream</option>
               <option value = "Powder">Powder</option>
               <option value = "Fruits">Fruits</option>
             </select>
          </p>
          <br>
          
        <!------------------------------------------------Email------------------------------------------------>
    Email: <input type="email" name="Email" placeholder="Email" required/>
        <br>
        
        <!---------------------------------------------comments-------------------------------------------------->
    Comments: <textarea name="Comment" placeholder="Comments" required > </textarea> <br/>
    
    
    <!---------------------------------------------Ratings---------------------------------------------->
     <tr>
     <p>
 <div class="rate">
    <td>Ratings:<input type="radio" id="star5" name="rate" value="5" /></td>
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
    </p> 
  </div>
     </tr>
</body>

</html><br>
<!---------------------------------------------socail media links---------------------------------------------->
<br>
<br>
<br> Social Media Links:<ul class="social-icons">
    <li>
       <a href="https://www.facebook.com/user" target='blank'>
            <img src="/images/social-media-icons/facebook.png" alt="Facebook" />
        </a>
    </li>
    <li>
        <a href="https://twitter.com/user" target='blank'>
            <img src="/images/social-media-icons/twitter.png" alt="Twitter" />
        </a>
    </li>
    <li>
        <a href="https://www.instagram.com/user" target='blank'>
            <img src="/images/social-media-icons/instagram.png" alt="Instagram" />
        </a>
    </li>
    <li>
        <a href="https://plus.google.com/+user" target='blank'>
            <img src="//mycyberuniverse.com/wp-content/uploads/social-media-icons/google.png" alt="Google+" />
        </a>
    </li>
    <li>
        <a href="https://www.youtube.com/channel/user" target='blank'>
            <img src="/images/social-media-icons/youtube.png" alt="YouTube" />
        </a>
    </li>
    </ul>
    <br/>
    
    <input type="submit" style="background-color:green;color:white;width:150px;height:40px;"  name="action" value="Register" />


</form>
</body>
</html>

