
<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "product");  
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
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="lib/Magnific-Popup-master/dist/magnific-popup.css">
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
          <a href="homepage.html"><i class="fas fa-home"></i> Home</a>
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
          <h3>Let's eat!</h3>
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
            <div class="logo">Foodkuy</div>
            <button type="button" id="sidebarrightbutton" class="btn">
            <i class="fas fa-search"></i>
            </button>
          </div>
        </nav>
        <!-- .Header  -->
<br><br> <style>
            #myform {
    text-align: center;
    padding: 5px;
    border: 1px dotted #ccc;
    margin: 2%;
}
.qty {
    width: 40px;
    height: 25px;
    text-align: center;
}
input.qtyplus { width:25px; height:25px;}
input.qtyminus { width:25px; height:25px;}


</style>
<br><br>
<br><div class="table-responsive" id="order_table">  
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="20%">Product Name</th>  
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
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         
                                         
                     
                                         
                                         
          <td> <input type='button' value='-' class='qtyminus' field='quantity' />                        
      <input type="number" name="quantity" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="qty" />
                          <input type='button' value='+' class='qtyplus' field='quantity' />

                          
                                         <td align="right">$ <?php echo $values["product_price"]; ?></td>  
                                         <td align="right">$ <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  
                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                         <td colspan="5" align="center">  
                                         <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  


<div>
<div>

</div>



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
   <script>
                        jQuery(document).ready(function () {
                        $('.qtyplus').click(function (e) {

                        e.preventDefault();

                        fieldName = $(this).attr('field');

                        var currentVal = parseInt($('input[name=' + fieldName + ']').val());

                        if (!isNaN(currentVal)) {

                        $('input[name=' + fieldName + ']').val(currentVal + 1);
                        } else {

                        $('input[name=' + fieldName + ']').val(1);
                        }
                        });

                        $(".qtyminus").click(function (e) {

                        e.preventDefault();

                        fieldName = $(this).attr('field');

                        var currentVal = parseInt($('input[name=' + fieldName + ']').val());

                        if (!isNaN(currentVal) && currentVal > 0) {

                        $('input[name=' + fieldName + ']').val(currentVal - 1);
                        } else {

                        $('input[name=' + fieldName + ']').val(0);
                        }
                        });
                        });
                      </script>
<script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>



