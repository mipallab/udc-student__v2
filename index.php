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
					<form action="#" >
						<div class="userField ">
							<label for="username mt-2">Username</label><br>
							<input class="px-2 form-control" id="username" type="text">
						</div>
						<div class="userPass mt-3">
							<label for="password">Password</label><br>
							<input class="px-2 form-control" id="password" type="password">
						</div>
						<div class="hideshow">
							<input class="form-check-input" id="showPass" type="checkbox" onclick="togglePass()"> <label class="form-check-label" for="showPass">Show Password</label>
						</div>
						<input class="mt-3 btn btn-outline-danger" type="submit" value="Log in">
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