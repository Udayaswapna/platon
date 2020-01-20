<html>
<head>
    <title>Contact Form</title>
</head>
<body>  
    <form action="dbcontact.php" method="post">
        Name: <input type="text" name="Name" /><br />
        Contact: <input type="number" name="Contact"><br />
        
        Product Name:
          <p>
              <select id = "Product" name="Product">
               <option value = "Biscuits" >Biscuits</option>
               <option value = "Chocolate">Chocolates</option>
               <option value = "Ice cream">Ice Cream</option>
               <option value = "Powder">Powder</option>
               <option value = "Fruits">Fruits</option>
             </select>
          </p>
        Email: <input type="email" name="Email" /><br />
        Comments: <textarea name="Comment" > </textarea> <br/>
        Rating: 
        <div class="rates">

  

    <input class="star star-5" id="star-5" type="radio" name="rate" value="1"/>
    <label class="star star-5" for="star-5"></label>

    <input class="star star-4" id="star-4" type="radio" name="rate" value="2"/>
    <label class="star star-4" for="star-4"></label>

    <input class="star star-3" id="star-3" type="radio" name="rate" value="3"/>
    <label class="star star-3" for="star-3"></label>

    <input class="star star-2" id="star-2" type="radio" name="rate" value="4"/>
    <label class="star star-2" for="star-2"></label>

    <input class="star star-1" id="star-1" type="radio" name="rate" value="5"/>
    <label class="star star-1" for="star-1"></label>

  

</div>
        
        Social Media Links: <ul class="social-icons">
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
    </ul><br/>
        <input type="submit" name="action" value="Register" />
    </form>
</body>
</html>
