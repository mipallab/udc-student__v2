<?php
session_start();
	include_once('./config.php');


	if(isset($_POST['submit'])) {

		//GET DATA
		$username = $_POST['username'];
		$password = $_POST['password'];
		$error = array(" ");
		// username exists valid
		    $sqlusernameselect = "SELECT * FROM administrator_users WHERE ad_usersname = '$username'";
		    $run_username_query = mysqli_query($connect, $sqlusernameselect) or die('ad_select query not run');
		    $result_username = mysqli_fetch_assoc($run_username_query);
		    $check_username = $result_username['ad_usersname'] ?? " ";
		    $check_password = $result_username['ad_password'] ?? " ";
		    $ad_id = $result_username['ad_id'] ?? " ";


		    if($username === $check_username) {
		    	
		    	if($password === $check_password) {

		    		$_SESSION['ad_id'] = $ad_id;
		    		$_SESSION['ad_login'] = "login";

		    		$location = './pages/ad_profile.php?view_id='.$ad_id;
						header("location: $location");

		    	}else{
		    		$error['password'] = "password not match!";
		    	}
		    }else {
		    	$error['username'] = "username not match!";
		    }



	}


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log in</title>
	
	
	<!-- bootstrap 5 -->
	<link href="./assects/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- main css -->
	<link rel="stylesheet" href="./assects/css/style.css">

	<!-- responsive -->
	<link rel="stylesheet" href="./assects/css/responsive.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="header text-center my-5">
				<img class="" width="100px" height="100px" src="./assects/media/img/udichilogo.jpg" alt="Udhichi Logo">
				<h1 class="text-danger"><strong>Bangladesh Udichi Shilpigosthi</strong></h1>
				<h4 class="text-boler my-3"><strong>Monohardi Shakha, Norshingdi</strong></h4>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="fromtable mx-auto">
			<div class="card my-5 shadow">
				<div class="card-header">
					<h2>Administrator Log In</h2>
				</div>
				<div class="card-body">
					<form action="#" method="POST">
						<div class="userField ">
							<label for="username mt-2">Username</label><br>
							<input class="px-2 form-control" id="username" type="text" name="username" value="<?php echo (isset($username)) ? ($username) : ("");?>">
							<div class="text-danger">
								<?php
									if(isset($error['username'])) {
										echo $error['username'];
									}
								?>	
							</div>
						</div>
						<div class="userPass mt-3">
							<label for="password">Password</label><br>
							<input class="px-2 form-control" id="password" type="password" name="password" value="<?php echo (isset($password)) ? ($password) : ("");?>">
								<div class="text-danger">
									<?php
										if(isset($error['password'])) {
											echo $error['password'];
										}
									?>
								</div>
						</div>
						<div class="hideshow">
							<input class="form-check-input" id="showPass" type="checkbox" onclick="togglePass()"> <label class="form-check-label" for="showPass">Show Password</label>
						</div>
						<input class="mt-3 btn btn-outline-danger" type="submit" value="Log in" name="submit">
					</form>
					
				</div>
				
			</div>
		</div>
	</div>










<footer>
	
  <svg viewBox="0 -20 700 110" width="100%" height="110" preserveAspectRatio="none">
    <path transform="translate(0, -20)" d="M0,10 c80,-22 240,0 350,18 c90,17 260,7.5 350,-20 v50 h-700" fill="red" />
    <path d="M0,10 c80,-18 230,-12 350,7 c80,13 260,17 350,-5 v100 h-700z" fill="#E6E7E9" />
  </svg>

</footer>







	<!-- bootstrap 5 -->
	<script src="./assects/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="./assects/js/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="./assects/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<script>
		function togglePass() {
  	var x = document.getElementById("password");
		  if (x.type === "password") {
		    x.type = "text";
		  } else {
		    x.type = "password";
		  }
		}
	</script>
</body>
</html>