<?php 

	session_start();

	//if Administrator not login
	if(!$_SESSION['ad_login']){
		header('location: ../../index.php');
	}

		include_once('../../config.php');

		$ad_user_id = $_SESSION['ad_id'];

		// Administrator SQL
	  	$admin_sql = "SELECT * FROM administrator_users WHERE ad_id = '$ad_user_id'";
		  $admin_result = mysqli_query($connect, $admin_sql) or die('ad_select query not run');
		  $admin_row = mysqli_fetch_assoc($admin_result);
		

		$view_id = $_GET['edit_id'] ?? $_GET['get_stu_id'] ?? "";
	

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
  <link href="../../assects/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assects/css/style.css">
   <link rel="stylesheet" href="../../assects/css/responsive.css">

</head>

<body>
	
  <nav class="navbar navbar-expand-lg navbar-danger bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../../assects/media/img/udichilogo.jpg" alt="udc logo" width="50" height="45"></a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../signup.php">Student Signup Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../table.php">All Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../search.php">Search Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../edit.php">Edit student profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../profile.php">View student profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link live" href="./payment-page.php">Payment Page</a>
          </li>
         
        </ul>
        <div class="d-flex">
            <a href="../ad_profile.php"><img class="rounded-circle border-warning" src="../../assects/media/img/users/<?php echo $admin_row['ad_photo'];?>" alt="" width="50" height="50"></a>
            <a class="btn btn-outline-danger ms-4" href="./logout.php">Logout</a>
        </div>
      </div>
    </div>
  </nav>



<?php
		$view_sql = "SELECT * FROM students WHERE stu_id = '$view_id'";
		$view_result = mysqli_query($connect, $view_sql) or die('edit query not run');
		$view_row = mysqli_fetch_assoc($view_result);
?>



	<!-- search field -->
	<div class="container">
		<div class="card shadow w-25 my-4">
			<div class="card-body">
				<form action="" method="GET">
					<label for="stu-search" class="form-label">Name : </label>
					<input id="stu-search" class="form-control" type="text" name="get_stu_id" placeholder="Search by student id" value="<?php echo $view_id?>">
					<button class="btn btn-sm btn-warning mt-2" type="submit">search</button>
				</form>
			</div>
		</div>
	</div>

	<!-- show profile field-->

	<?php 
			if(mysqli_num_rows($view_result) > 0) :
	?>
 	<div class="container">
		<div class="card my-5 shadow">
			<div class="card-header">
				<h1>My Profile</h1>
			</div>
			<div class="card-body">
				<div class="profile-head bg-light border" style='background-image: url("../../assects/media/img/users/userBG.jpg")'>
					<div class="user-pic">
						<div class="pic">
							<img width="250px" height="250px" class="profile-pic shadow border border-light border-5 rounded-circle" src="../../assects/media/img/users/<?php echo $view_row['photo'];?>" alt="Dammy">
							<h2 class="text-center my-2"><?php echo $view_row['full_name'];?></h2>
						</div>
					</div>
				</div>
				
				<div class="user-info-table">
					<div class="table-responsive">
						<form action="" method="POST">
							<table class="table table-bordered">
							  <tbody>
							  	<tr>
							      	<th width="150" scope="row">Student ID</th>
							      	<td><b><?php echo $view_row['stu_id'];?></b></td>
							    </tr>
							  	<tr>
							      	<th scope="row">Full Name(BN)</th>
							      	<td><?php echo $view_row['full_name_bn'];?></td>
							    </tr>
							    <tr>
							      	<th scope="row">Full Name</th>
							      	<td><?php echo $view_row['full_name'];?></td>
							    </tr>
							  </tbody>
							</table>

							<hr>

							<div class=" px-3 py-3">
								<h3>Payment History:</h3>
								<table class="table table-bordered ">
								  <thead>
								    <tr>
								      <th scope="col">Year</th>
								      <th scope="col">Jan</th>
								      <th scope="col">Feb</th>
								      <th scope="col">Mar</th>
								      <th scope="col">Apr</th>
								      <th scope="col">May</th>
								      <th scope="col">Jun</th>
								      <th scope="col">Jul</th>
								      <th scope="col">Aug</th>
								      <th scope="col">Sep</th>
								      <th scope="col">Oct</th>
								      <th scope="col">Nov</th>
								      <th scope="col">Dec</th>
								    </tr>
								  </thead>
								  <tbody>

								  	<!-- for 2020 -->
								    <tr>
											<th scope="row">2020</th>
								    	<?php
													$payment_view_sql20 = "SELECT * FROM `payment_info2020` WHERE `stu-id` = '$view_id'";
													$payment_view_result20 = mysqli_query($connect, $payment_view_sql20) or die('payment query not run');
													$payment_view_row20 = mysqli_fetch_assoc($payment_view_result20);													
												if(mysqli_num_rows($payment_view_result20)) {
											?>

								      
								      <td><?php echo $payment_view_row20['january'];?></td>
								      <td><?php echo $payment_view_row20['february'];?></td>
								      <td><?php echo $payment_view_row20['march'];?></td>
								      <td><?php echo $payment_view_row20['april'];?></td>
								      <td><?php echo $payment_view_row20['may'];?></td>
								      <td><?php echo $payment_view_row20['june'];?></td>
								      <td><?php echo $payment_view_row20['july'];?></td>
								      <td><?php echo $payment_view_row20['august'];?></td>
								      <td><?php echo $payment_view_row20['september'];?></td>
								      <td><?php echo $payment_view_row20['october'];?></td>
								      <td><?php echo $payment_view_row20['november'];?></td>
								      <td><?php echo $payment_view_row20['december'];?></td>
								      <?php
								      	}else {
								      		echo "<td colspan='12'> <h5 class='text-center'>2020 payment info not found 😢😢😢 </h5></td>";
								      	}
								      ?>
								    </tr>
								    <!-- for 2020 end -->



								    <!-- for 2021 -->
								    <tr>
											<th scope="row">2021</th>
								    	<?php
													$payment_view_sql21 = "SELECT * FROM `payment_info2021` WHERE `stu-id` = '$view_id'";
													$payment_view_result21 = mysqli_query($connect, $payment_view_sql21) or die('payment query not run');
													$payment_view_row21 = mysqli_fetch_assoc($payment_view_result21);
													if(mysqli_num_rows($payment_view_result21)) {										
											?>
								      
								      <td><?php echo $payment_view_row21['january'];?></td>
								      <td><?php echo $payment_view_row21['february'];?></td>
								      <td><?php echo $payment_view_row21['march'];?></td>
								      <td><?php echo $payment_view_row21['april'];?></td>
								      <td><?php echo $payment_view_row21['may'];?></td>
								      <td><?php echo $payment_view_row21['june'];?></td>
								      <td><?php echo $payment_view_row21['july'];?></td>
								      <td><?php echo $payment_view_row21['august'];?></td>
								      <td><?php echo $payment_view_row21['september'];?></td>
								      <td><?php echo $payment_view_row21['october'];?></td>
								      <td><?php echo $payment_view_row21['november'];?></td>
								      <td><?php echo $payment_view_row21['december'];?></td>
								      <?php
								      	}else {
								      		echo "<td colspan='12'> <h5 class='text-center'>2021 payment info not found 😢😢😢 </h5></td>";
								      	}
								      ?>
								    </tr>
								    <!-- for 2021 end -->


								    <!-- for 2022 -->
								    <tr>
											<th scope="row">2022</th>
								    	<?php
													$payment_view_sql22 = "SELECT * FROM `payment_info2022` WHERE `stu-id` = '$view_id'";
													$payment_view_result22 = mysqli_query($connect, $payment_view_sql22) or die('payment query not run');
													$payment_view_row22 = mysqli_fetch_assoc($payment_view_result22);
													if(mysqli_num_rows($payment_view_result22)) {										
											?>
								      
								      <td><?php echo $payment_view_row22['january'];?></td>
								      <td><?php echo $payment_view_row22['february'];?></td>
								      <td><?php echo $payment_view_row22['march'];?></td>
								      <td><?php echo $payment_view_row22['april'];?></td>
								      <td><?php echo $payment_view_row22['may'];?></td>
								      <td><?php echo $payment_view_row22['june'];?></td>
								      <td><?php echo $payment_view_row22['july'];?></td>
								      <td><?php echo $payment_view_row22['august'];?></td>
								      <td><?php echo $payment_view_row22['september'];?></td>
								      <td><?php echo $payment_view_row22['october'];?></td>
								      <td><?php echo $payment_view_row22['november'];?></td>
								      <td><?php echo $payment_view_row22['december'];?></td>
								      <?php
								      	}else {
								      		echo "<td colspan='12'> <h5 class='text-center'>2022 payment info not found 😢😢😢 </h5></td>";
								      	}
								      ?>
								    </tr>
								    <!-- for 2022 end -->


								    <!-- for 2023 -->
								    <tr>
											<th scope="row">2023</th>
								    	<?php
													$payment_view_sql23 = "SELECT * FROM `payment_info2023` WHERE `stu-id` = '$view_id'";
													$payment_view_result23 = mysqli_query($connect, $payment_view_sql23) or die('payment query not run');
													$payment_view_row23 = mysqli_fetch_assoc($payment_view_result23);
													if(mysqli_num_rows($payment_view_result23)) {										
											?>
								      
								      <td><?php echo $payment_view_row23['january'];?></td>
								      <td><?php echo $payment_view_row23['february'];?></td>
								      <td><?php echo $payment_view_row23['march'];?></td>
								      <td><?php echo $payment_view_row23['april'];?></td>
								      <td><?php echo $payment_view_row23['may'];?></td>
								      <td><?php echo $payment_view_row23['june'];?></td>
								      <td><?php echo $payment_view_row23['july'];?></td>
								      <td><?php echo $payment_view_row23['august'];?></td>
								      <td><?php echo $payment_view_row23['september'];?></td>
								      <td><?php echo $payment_view_row23['october'];?></td>
								      <td><?php echo $payment_view_row23['november'];?></td>
								      <td><?php echo $payment_view_row23['december'];?></td>
								      <?php
								      	}else {
								      		echo "<td colspan='12'> <h5 class='text-center'>2022 payment info not found 😢😢😢 </h5></td>";
								      	}
								      ?>
								    </tr>
								    <!-- for 2023 end -->
								 
								  </tbody>
								</table>
							</div>
							<a href="./add-payment-page.php?edit_id=<?php echo $view_row['stu_id'];?>" class="btn btn-outline-danger ms-4 my-3">Add Payment </a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php else :
		echo "<h3 class='text-center py-5'>Pleae Search with \"studetn id\" </h3>";

		endif;
	?>
	<footer>
	
	  <svg viewBox="0 -20 700 110" width="100%" height="110" preserveAspectRatio="none">
	    <path transform="translate(0, -20)" d="M0,10 c80,-22 240,0 350,18 c90,17 260,7.5 350,-20 v50 h-700" fill="red" />
	    <path d="M0,10 c80,-18 230,-12 350,7 c80,13 260,17 350,-5 v100 h-700z" fill="#E6E7E9" />
	  </svg>

	</footer>




	<!-- bootstrap 5 -->
	<script src="../../assects/js/jquery-3.6.3.min.js"></script>
	<script src="../../assects/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="../../assects/js/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="../../assects/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script src="../../assects/js/main.js"></script>
</body>
</html>