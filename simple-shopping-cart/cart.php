
      <?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "product");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
        'item_name'			=>	$_POST["hidden_name"],
        'item_image'			=>	$_POST["image"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
      'item_name'			=>	$_POST["hidden_name"],
      'item_image'			=>	$_POST["image"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>

<!doctype html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>Foodkuy - Mobile HTML Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="HandheldFriendly" content="True">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Bootstrap v4.3.1 CSS -->
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/theme.css">
  <link rel="stylesheet" href="css/theme/themelibrary.css">
  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="lib/slick/slick/slick-theme.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Magnific Popup core CSS file -->
  <link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">
  <!-- Font Awesome Free 5.10.2 JS -->
  <script defer src="lib/fontawesome-free-5.10.2-web/js/brands.js"></script>
  <script defer src="lib/fontawesome-free-5.10.2-web/js/solid.js"></script>
  <script defer src="lib/fontawesome-free-5.10.2-web/js/fontawesome.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
      <div class="sdprofile">
        <div class="sdp-left">
          <img src="img/profile5.jpg" alt="profile">
        </div>
        <div class="sdp-right">
          <div class="sd-name">Sarah Corner</div>
          <div class="sd-status">Exclusive Author</div>
        </div>
      </div>
      <ul class="list-unstyled components">
        <li>
          <a href="homepage.html"><i class="fas fa-home"></i> Home</a>
        </li>
        <li>
          <a href="#pagemyaccount" data-toggle="collapse" aria-expanded="false"><i class="fas fa-user"></i> My Account <span><i class="fas fa-caret-down"></i></span></a>
          <ul class="collapse collapsible-body" id="pagemyaccount">
            <li>
              <a href="new_recipe.html">Add new recipe</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
            </li>
            <li>
              <a href="setting.html">Setting</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#pagesubmenu" data-toggle="collapse" aria-expanded="false"><i class="fas fa-clone"></i> Pages <span><i class="fas fa-caret-down"></i></span></a>
          <ul class="collapse collapsible-body" id="pagesubmenu">
            <li>
              <a href="homepage.html">Home</a>
            </li>
            <li>
              <a href="recipe_list.html">Recipe list</a>
            </li>
            <li>
              <a href="recipe_page.html">Recipe page</a>
            </li>
            <li>
              <a href="author.html">Author</a>
            </li>
            <li>
              <a href="feedback.html">Feedback</a>
            </li>
            <li>
              <a href="setting.html">Setting</a>
            </li>
            <li>
              <a href="gallery.html">Gallery</a>
            </li>
            <li>
              <a href="news_list.html">News list</a>
            </li>
            <li>
              <a href="news.html">News</a>
            </li>
            <li>
              <a href="register.html">Register</a>
            </li>
            <li>
              <a href="login.html">Login</a>
            </li>
            <li>
              <a href="new_recipe.html">New recipe</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
            </li>
            <li>
              <a href="favorite.html">Favorites</a>
            </li>
            <li>
              <a href="single_page.html">Single page</a>
            </li>
            <li>
              <a href="404.html">404 error page</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="favorite.html"><i class="fas fa-heart"></i> Favorites</a>
        </li>
        <li>
          <a href="#"><i class="fas fa-star"></i> Rate</a>
        </li>
        <li>
          <a href="feedback.html"><i class="fas fa-envelope"></i> Feedback</a>
        </li>
        <li>
          <a href="setting.html"><i class="fas fa-cog"></i> Settings</a>
        </li>
        <li>
          <a href="single_page.html"><i class="fas fa-exclamation-circle"></i> About</a>
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
        <h3>Let's eat!</h3>
      </div>
      <div class="search-form">
        <div class="search-wrapper ">
          <input id="search">
          <button class="ssubmit" type="submit" name="search_submit"><i class="fas fa-search"></i></button>
        </div>
        <ul class="right-menu">
          <li class="right-menu-item">
            <a href="#menu-dinner" data-toggle="collapse" aria-expanded="false"><i class="fas fa-plus"></i> Dinner <span><i class="fas fa-caret-down"></i></span></a>
            <ul class="collapse collapsible-body" id="menu-dinner">
              <li>
                <a href="#">Soup Recipes <div class="count">3</div></a>
              </li>
              <li>
                <a href="#">Bread Recipes <div class="count">2</div></a>
              </li>
              <li>
                <a href="#">Low Calorie <div class="count">32</div></a>
              </li>
            </ul>
          </li>
          <li class="right-menu-item">
            <a href="#menu-lunch" data-toggle="collapse" aria-expanded="false"><i class="fas fa-plus"></i> Lunch <span><i class="fas fa-caret-down"></i></span></a>
            <ul class="collapse collapsible-body" id="menu-lunch">
              <li>
                <a href="#">Taco Recipes <div class="count">3</div></a>
              </li>
              <li>
                <a href="#">Fruit <div class="count">8</div></a>
              </li>
              <li>
                <a href="#">Pasta <div class="count">2</div></a>
              </li>
            </ul>
          </li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Breakfast <div class="count">3</div></a></li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Baking Recipes <div class="count">45</div></a></li>
          <li class="right-menu-item">
            <a href="#menu-quick" data-toggle="collapse" aria-expanded="false"><i class="fas fa-plus"></i>Quick & Easy Recipes <span><i class="fas fa-caret-down"></i></span></a>
            <ul class="collapse collapsible-body" id="menu-quick">
              <li>
                <a href="#">Seafood<div class="count">9</div></a>
              </li>
              <li>
                <a href="#">Chicken Recipes <div class="count">14</div></a>
              </li>
              <li>
                <a href="#">Beef <div class="count">7</div></a>
              </li>
            </ul>
          </li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Chicken Recipes <div class="count">66</div></a></li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Soup Recipes <div class="count">8</div></a></li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Taco Recipes <div class="count">2</div></a></li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Bread Recipes <div class="count">100</div></a></li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Cake Recipes <div class="count">45</div></a></li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Dessert <div class="count">43</div></a></li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Healthy <div class="count">20</div></a></li>
          <li class="right-menu-item"><a href="#"><i class="fas fa-plus"></i> Sandwiches <div class="count">93</div></a></li>
        </ul>
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
          <div class="logo">Foodkuy</div>
          <button type="button" id="sidebarrightbutton" class="btn">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </nav>
      <!-- .Header  -->
      <!-- Content Wrap  -->


	
		<br />
		
		<div class="container">
			<br />
			<br />
			<br />
			
			<br /><br />
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="25%">Item Name</th>
            <th width="10%">Image</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					
						<td><?php echo $values["item_name"]; ?></td>
           <td><img width="10" height="10" src="images/<?php echo $values["item_image"]; ?>" class="img-responsive" /></td>
                        
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>




            <!-- .Content wrap  -->
      <!-- Footer  -->
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
  </div>
</body>


</html>