<?php 
	session_start();

	//if Administrator not login
	if(!$_SESSION['ad_login']){
		header('location: ../index.php');
	}


	include_once('../config.php');

		$ad_user_id = $_SESSION['ad_id'];

		// Administrator SQL
	  	$admin_sql = "SELECT * FROM administrator_users WHERE ad_id = '$ad_user_id'";
		  $admin_result = mysqli_query($connect, $admin_sql) or die('ad_select query not run');
		  $admin_row = mysqli_fetch_assoc($admin_result);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $admin_row['ad_name'];?></title>


  <!-- bootstrap 5 icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- bootarap 5.0.2 -->
  <link href="../assects/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../assects/css/style.css">
   <link rel="stylesheet" href="../assects/css/responsive.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-danger bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../assects/media/img/udichilogo.jpg" alt="udc logo" width="50" height="45"></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " href="./signup.php">Student Signup Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link live" href="./table.php">All Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./search.php">Search Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./edit.php">Edit student profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./profile.php">View student profile</a>
          </li>
         
        </ul>
        <div class="d-flex">
            <a href="./ad_profile.php"><img class="rounded-circle border-warning" src="../assects/media/img/users/<?php echo $admin_row['ad_photo'];?>" alt="" width="50" height="50"></a>
            <a class="btn btn-outline-danger ms-4" href="./logout.php">Logout</a>
        </div>
      </div>
    </div>
  </nav>


	<div class="container">
		<div id="stu_table">			
		</div>		
	</div>
			
	<footer>
	
	  <svg viewBox="0 -20 700 110" width="100%" height="110" preserveAspectRatio="none">
	    <path transform="translate(0, -20)" d="M0,10 c80,-22 240,0 350,18 c90,17 260,7.5 350,-20 v50 h-700" fill="red" />
	    <path d="M0,10 c80,-18 230,-12 350,7 c80,13 260,17 350,-5 v100 h-700z" fill="#E6E7E9" />
	  </svg>

	</footer>




	<!-- bootstrap 5 -->
	<script src="../assects/js/jquery-3.6.3.min.js"></script>
	<script src="../assects/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="../assects/js/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="../assects/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script src="../assects/js/main.js"></script>

	<script>
		$(document).ready(function() {
			function loadTable(page) {
				$.ajax({
					url: "pagination_page.php",
					type: "POST",
					data: {page_no: page},
					success: function (data) {
						$("#stu_table").html(data);
					}
				});
			}
			loadTable();

			//pagiantion 
			$(document).on("click","#pagination li a",function(e){
				e.preventDefault();
				let page_id = $(this).attr("id");

				loadTable(page_id);
			});
		});
	</script>
</body>
</html>