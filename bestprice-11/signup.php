<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIGNUP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<form action="homepage.html" method="POST">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter name">
						<input class="input100" type="text" name="name" placeholder="Username" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="email" name="email" placeholder="EMAIL" required>
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter cnumber">
						<input class="input100" type="tel" name="cnumber" pattern="[0-9]{10}" placeholder="Contact no" required>
						<span class="focus-input100"></span>
					</div><br>
					

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
					</div><br>



					<div class="wrap-input100 validate-input" data-validate = "Please confirm password">
						<input class="input100" type="password" name="confpass" placeholder="confirm Password" required>
						<span class="focus-input100"></span>
					</div><br><br><br>

					

					<?php


					
					$name  = filter_input(INPUT_POST,'name');
					$email     = filter_input(INPUT_POST,'email');
					$cnumber   = filter_input(INPUT_POST,'cnumber');
					$password      = filter_input(INPUT_POST,'password');
					$confpass    = filter_input(INPUT_POST,'confpass');
			  
			  
				if(!empty($name) ||  !empty($email) || !empty($cnumber) || !empty($password) ||!empty($confpass)){
			  
					$host     =   "localhost";
					$db_user  = "root";
					$db_pass  = "";
					$db_name  = "bestprice";
			  
					if($password!=$confpass){
			  
					  echo '<script type="text/javascript">';
					  echo ' alert("Invalid Password")';  //not showing an alert box.
					  echo '</script>';
					  //echo 'Invalid Password';
					}
					else{
					  $conn = new mysqli($host,$db_user,$db_pass,$db_name);
						if(mysqli_connect_error()){
						  die('Connect Error ('. mysqli_connect_errno() .')'. mysqli_connect_error());
						  } else{
			  
							  $sql = "INSERT INTO register (name,email,cnumber,password,confpass) values ('$name','$email','$cnumber','$password','$confpass')";
								if ($conn->query($sql)){
				  ?>
			  
			  
									<div class="text-center">
				  <?php
									echo "<p> <font color=blue>New record is inserted sucessfully</font>";
				  ?>
									</div>
				  <?php
								  }
								  else{
									  echo "Error: ". $sql ."". $conn->error;
									}
									$conn->close();
			  
								}
						  }
					  }
				
				  ?>
			  
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="signup">
							signup
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Already have an account?
						</span>

						<a href="signin.html" class="txt3">
							Sign in now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</form>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>