<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V8</title>
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
	<form action="signin.php" method="POST">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" name="email" placeholder="EMAIL" required>
						<span class="focus-input100"></span>
					</div><br>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="PASSWORD" required>
						<span class="focus-input100"></span>
					</div><br><br>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="signin">
							signin
						</button>
					</div>
					
<?php
 

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
			die("Database Connection Failed" . mysqli_error($connection));
				 }
	$select_db = mysqli_select_db($connection, 'bestprice');
		if (!$select_db){
				die("Database Selection Failed" . mysqli_error($connection));
			}


if (isset($_POST['email']) and isset($_POST['password'])){

// Assigning POST values to variables.
              $email = $_POST['email'];
			  $password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
			  $query = "SELECT * FROM `register` WHERE email ='$email' and password='$password'";
 
			  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
			  $count = mysqli_num_rows($result);
                    
			  if ($count == 1) {
                echo "<p> <font color=red> Welcome </font>" ;
			  }else{

?>
					  <div class="text-center">
<?php
					  echo "<p> <font color=red>Wrong Password</font>";
?>
						</div>
<?php
}
}
?>


					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="signup.php" class="txt3">
							Sign up now
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