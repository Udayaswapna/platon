<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>BEST PRICE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap v4.3.1 CSS -->
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme/themelibrary.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick-theme.css">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800'
        rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Font Awesome Free 5.10.2 JS -->
    <script defer src="lib/fontawesome-free-5.10.2-web/js/brands.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/solid.js"></script>
    <script defer src="lib/fontawesome-free-5.10.2-web/js/fontawesome.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body class="default">

    <!-- Preloading -->
    <div class="preloading">
        <div class="wrap-preload">
            <div class="cssload-loader"></div>
        </div>
    </div>
    <!-- .Preloading -->

    <div class="wrapper">
        <!-- Sidebar left -->
        <nav id="sidebarleft" class="sidenav">
            <div id="dismiss">
                <i class="fas fa-times"></i>
            </div>
            <div class="sidebar-header">
                <h3>Account</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="index.php"><i class="fas fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="add.php"><i class="fas fa-home"></i> Add product</a>
                </li>
                <li>
                    <a href="index11.php"><i class="fas fa-home"></i> product list</a>
                </li>
                <li>
                    <a href="cart2.php"><i class="fas fa-home"></i> Cart</a>
                </li>
            </ul>
        </nav>
        <!-- .Sidebar left -->
        <!-- Sidebar right -->

        <nav id="sidebarright" class="sidenav">

            <div id="dismiss">
                <i class="fas fa-times"></i>
            </div>
            <div class="sidebar-header">
                <h3>Let's search</h3>
            </div>
            <div class="search-form">
                <div class="search-wrapper ">
                    <input id="search">
                    <button class="ssubmit" type="submit" name="search_submit"><i class="fas fa-search"></i></button>
                </div>

            </div>
        </nav>
        <!-- .Sidebar right-->
        <!-- Page content  -->
        <div id="content">
            <!-- Header  -->
            <nav class="navbar navbar-expand-lg navbar-light bg-header">
                <div class="container-fluid">
                    <button type="button" id="sidebarleftbutton" class="btn">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <div class="logo">BEST PRICE


                        <a href="cart2.php"> <button type="button" class="btn"> <i class="fa fa-shopping-cart"
                                    aria-hidden="true"> </i> <span
                                    class=""><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span>

                            </button>
                    </div></a>
                    <button type="button" id="sidebarrightbutton" class="btn">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </nav>
            <!-- .Header  -->
            <!-- Content Wrap  -->
            <div id="content">
                <div class="container">

                    <div class="row">



                        <div class="box">
                            <form method="post" action="checkout1.php">



                                <div class="content">

                                    <h3><span align="center">BILLING ADRESS</span> </h3>
                                    <div class="row">
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="firstname">First name</label>
                                                <input type="text" name="fname" class="form-control" id="firstname" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="lastname">Last name</label>
                                                <input type="text" name="lname" class="form-control" id="lastname" required>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="company">Company name(optional)</label>
                                                <input type="text"  name="company" class="form-control" id="company" >
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <div class="form-group">
                                                <label for="street">Street Adress</label>
                                                <input type="text"  name="addr1" class="form-control" id="street" required><br>
                                                <input type="text" name="addr2" class="form-control" id="street" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text"  name="city" class="form-control" id="city" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="country">STATE</label>
                                                <select name="state" class="form-control" id="country" required>
                                                    <option name="state" value="AP">Andhra Pradesh</option>
                                                    <option name="state" value="AR">Arunachal Pradesh</option>
                                                    <option name="state" value="AS">Assam</option>
                                                    <option name="state"  value="BR">Bihar</option>
                                                    <option name="state"  value="CT">Chhattisgarh</option>
                                                    <option name="state"  value="GA">Goa</option>
                                                    <option name="state"  value="GJ">Gujarat</option>
                                                    <option  name="state" value="HR">Haryana</option>
                                                    <option  name="state" value="HP">Himachal Pradesh</option>
                                                    <option name="state"  value="JK">Jammu and Kashmir</option>
                                                    <option name="state"  value="JH">Jharkhand</option>
                                                    <option name="state"  value="KA" >Karnataka</option>
                                                    <option name="state"  value="KL">Kerala</option>
                                                    <option name="state"  value="MP">Madhya Pradesh</option>
                                                    <option name="state"  value="MH">Maharashtra</option>
                                                    <option name="state"  value="MN">Manipur</option>
                                                    <option name="state"  value="ML">Meghalaya</option>
                                                    <optio name="state" n value="MZ">Mizoram</option>
                                                    <option name="state"  value="NL">Nagaland</option>
                                                    <option name="state"  value="OR">Orissa</option>
                                                    <option name="state"  value="PB">Punjab</option>
                                                    <option name="state"  value="RJ">Rajasthan</option>
                                                    <option name="state"  value="SK">Sikkim</option>
                                                    <option name="state"  value="TN">Tamil Nadu</option>
                                                    <option name="state"  value="TS">Telangana</option>
                                                    <option name="state"  value="TR">Tripura</option>
                                                    <option name="state"  value="UK">Uttarakhand</option>
                                                    <option name="state"  value="UP">Uttar Pradesh</option>
                                                    <option name="state"  value="WB">West Bengal</option>
                                                    <option name="state"  value="AN">Andaman and Nicobar Islands</option>
                                                    <option name="state"  value="CH">Chandigarh</option>
                                                    <option name="state"  value="DN">Dadra and Nagar Haveli</option>
                                                    <option name="state"  value="DD">Daman and Diu</option>
                                                    <option name="state"  value="DL">Delhi</option>
                                                    <option name="state"  value="LD">Lakshadeep</option>
                                                    <option name="state"  value="PY">Pondicherry (Puducherry)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="country">country</label>
                                                <select name="country" class="form-control" id="country" required>
                                                    <option  name="country"  value="IN" >India</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-2">
                                            <div class="form-group">
                                                <label for="zip">Postal code</label>
                                                <input type="text" name="zip" class="form-control" id="zip" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <div class="form-group">              
                                                <label for="streetnr">Conact Number</label>
                                                <input type="tel" name="cno" maxlength="10" placeholder="contact" class="form-control" id="number" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="email">E-Mail</label>
                                                <input type="email" name="email" class="form-control" id="email" required>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="w3-container">



                                        <div class="w3-panel w3-card">
                                            <div class="w3-panel w3-card-2">
                                                <br>
                                                <p> <span style="float:left"><strong>PRODUCT</strong></span> <span
                                                        style="float:right"><strong>SUBTOTAL</strong></span></p>
                                                <br>

                                            </div>
                                            <div class="w3-panel w3-card-4">
                                            <?php 
                                             if(!empty($_SESSION["shopping_cart"]))  
                                             {  
                                                  $total = 0;  
                                            foreach($_SESSION["shopping_cart"] as $keys => $values) 
                                             {
                                           ?> <br>  <?php echo $values["product_name"]; echo '  × ' ; echo $values["product_quantity"];  ?> 
                                                    <span style="float:right"> ₹<?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></span>
                                                 <?php   $total = $total + ($values["product_quantity"] * $values["product_price"]); ?>
                                                    <br><br>
                                            
                                            <?php  } ?>
                                                <br>
                                            </div>
                                            <div class="w3-panel w3-card-4"><br>
                                            <?php if($_SESSION["shopping_cart"]) 
                                                        { 
                                                            
                                                            ?>
                                                <p> <span style="float:left"><strong>SUBTOTAL</strong></span>    <span style="float:right"> ₹<?php  echo number_format($total, 2);    ?></span> </p><br>
                                                <p> <span style="float:left"><strong>SHIPPING</strong></span>  <span style="float:right">₹<?php  echo '0';    ?></span> </p><br>
                                                <p> <span style="float:left"><strong>TOTAL</strong></span> <span style="float:right">₹<?php  echo number_format($total, 2);    ?></span></p><br>
                                                <?php }  }?>
                                            </div>
                                        </div>
                                    </div>
                                    <h5><strong>Pay securely via Card/Net Banking/Wallet via Cashfree.</strong> </h5>


                                    <h5><strong> <input type="checkbox">Your personal data will be used to process your
                                            order, support your experience throughout this website, and for other
                                            purposes described in our privacy policy</strong>

                                    </h5> 
                                    <input type="submit" name="place_order" class="btn btn-warning" id="abc"
                                        value="place order" />
    



                            </form>

  
    
                        </div>
                    </div>
                </div>


            </div>


            <!-- Footer  -->
            <br>
            <div class="footer">
                <div class="footer-heading">Follow Us</div>
                <div class="socmed">
                    <div class="socmed-line">
                        <div class="socmed-item">
                            <a href="#" class="si-icon"> <i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <div class="socmed-line">
                        <div class="socmed-item">
                            <a href="#" class="si-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="socmed-line">
                        <div class="socmed-item">
                            <a href="#" class="si-icon"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="socmed-line">
                        <div class="socmed-item">
                            <a href="#" class="si-icon"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .Footer  -->
        </div>
        <!-- .Page content  -->
        <div class="overlay"></div>
        <!-- Optional JavaScript -->
        <!-- jQuery v3.4.1 -->
        <script src="lib/jquery/jquery-3.4.1.min.js"></script>
        <!--  Bootstrap v4.3.1 JS -->
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- Magnific Popup core JS file -->
        <script src="lib/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
        <!-- Slick JS -->
        <script src="lib/slick/slick/slick.min.js"></script>
        <!--  Custom JS -->
        <script src="js/theme.js"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
        </script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="js/jquery.cookie.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/front.js"></script>
    </div>
</body>

</html>
