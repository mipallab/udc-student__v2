<?php 
		
		include_once('../config.php');

		$edit_id = $_GET['edit_id'] ?? $_GET['get_stu_id'] ?? " ";


		if(isset($_POST['submit'])) {

		$error = array();
		//POST data
		    $address 					= $_POST['address'] ;
		    $occopation 			= $_POST['occopation'] ;
		    $phone 						= $_POST['phone'] ;		   
		    $email 						= $_POST['email'] ;
		    $username 				= $_POST['username'] ;
		    $password					= $_POST['password'] ;



		// username exists valid
		    $sqlusernameselect = "SELECT username FROM students WHERE username = '$username'";
		    $run_username_query = mysqli_query($connect, $sqlusernameselect) or die('select query not run');
		    $result_username = mysqli_fetch_assoc($run_username_query);
		    $check_username = $result_username['username'] ?? " ";
		    if($username === $check_username) {
		    	$error['username'] = '"'. $username .'" username already exists! Please try another username';
		    }


		// email exists valid
		    $sqlemailselect = "SELECT email FROM students WHERE email = '$email'";
		    $run_email_query = mysqli_query($connect, $sqlemailselect) or die('select query not run');
		    $result_email = mysqli_fetch_assoc($run_email_query);
		    $check_email = $result_email['email'] ?? ' ';
		    if($email === $check_email) {
		    	$error['email'] = '"'. $email .'" email already exists! Please try another email';
		    }else {
		    	$email = $_POST['email'] ;
		    }

		    
	    //interested subject
		    $interested = $_POST['interested_sub'];
			$chk = '';
			foreach($interested as $chk1)  
		   	{  
		      $chk .= $chk1.", ";  
		   	}  
		   	$interested_sub = substr($chk,0,-2);		   	

		   	
		if(count($error) === 0) {


			//send query
				$sql = "UPDATE `students` SET present_address = '$address', occupation = '$occopation', interested_subject = '$interested_sub', email = '$email', username = '$username', password ='$password' WHERE `stu_id` = '$edit_id'";
				mysqli_query($connect, $sql) or die('query not send');

			//redirect page
				header("location:./profile.php?view_id=$edit_id");

		}

	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrator user</title>


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
            <a class="nav-link" href="./signup.php">Student Signup Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./table.php">All Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link live" href="./edit.php">Edit student profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./profile.php">View student profile</a>
          </li>
         
        </ul>
        <div class="d-flex">
            <a href="./ad_profile.php"><img class="rounded-circle border-warning" src="../assects/media/img/dammy.png" alt="" width="50" height="43"></a>
            <a class="btn btn-outline-danger ms-4" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </nav>

</body>

<?php
		$edit_sql = "SELECT * FROM students WHERE stu_id = '$edit_id'";
		$edit_result = mysqli_query($connect, $edit_sql) or die('edit query not run');
		$edit_row = mysqli_fetch_assoc($edit_result);
?>



	<!-- search field -->
	<div class="container">
		<div class="card shadow w-25 my-4">
			<div class="card-body">
				<form action="" method="GET">
					<label for="stu-search" class="form-label">Name : </label>
					<input id="stu-search" class="form-control" type="text" name="get_stu_id" placeholder="Search by student id" value="<?php echo $edit_id?>">
					<button class="btn btn-sm btn-warning mt-2" type="submit">search</button>
				</form>
			</div>
		</div>
	</div>

	<!-- show profile field-->

	<?php 
			if(mysqli_num_rows($edit_result) > 0) :
	?>
 	<div class="container">
		<div class="card my-5 shadow">
			<div class="card-header">
				<h1>My Profile</h1>
			</div>
			<div class="card-body">
				<div class="profile-head bg-light border" style='background-image: url("../assects/media/img/users/userBG.jpg")'>
					<div class="user-pic">
						<div class="pic">
							<img width="250px" height="250px" class="profile-pic shadow border border-light border-5 rounded-circle" src="../assects/media/img/users/<?php echo $edit_row['photo'];?>" alt="Dammy">
							<h2 class="text-center my-2"><?php echo $edit_row['full_name'];?></h2>
						</div>
					</div>
				</div>
				
				<div class="user-info-table">
					<div class="table-responsive">
						<form action="" method="POST">
							<table class="table table-bordered">
							  <tbody>
							    <tr>
							      	<th scope="row">Full Name</th>
							      	<td><?php echo $edit_row['full_name'];?></td>
							    </tr>
							    <tr>
							      	<th scope="row">Father's Name</th>
							      	<td><?php echo $edit_row['father_name'];?></td>
							    </tr>
							    <tr>
							      	<th scope="row">Mother's Name</th>
							      	<td><?php echo $edit_row['mother_name'];?></td>
							    </tr>
							   <tr>
									<th scope="row">Date of Birth</th>
									<td><?php echo $edit_row['date_of_birth'];?></td>
								</tr>
								<tr>
									<th scope="row">Old</th>
									<td><?php echo $edit_row['age'];?></td>
								</tr>
								<tr>
									<th scope="row">Present Address</th>
									<td><input name="address" class="form-control" type="address" value="<?php echo $edit_row['present_address'];?>"></td>
								</tr>
								
								<tr>
									<th scope="row">Occopation</th>
									<td><input name="occopation" class="form-control" type="text" value="<?php echo $edit_row['occupation'];?>"></td>
								</tr>
								<tr>
									<th scope="row">Phone Number</th>
									<td><input name="phone" class="form-control" type="tel" value="<?php echo $edit_row['phone'];?>"></td>
								</tr>
								<tr>
									<th scope="row">Interested Subject</th>
									<td>

										<?php
											$interested_sub_result = mysqli_query($connect, "SELECT `interested_subject` FROM `students` WHERE `stu_id` = '$edit_id'") or die('sub not run');
											$ister_row = mysqli_fetch_assoc($interested_sub_result);
											$ins_sub =  explode(", ",$ister_row['interested_subject']);
										?>
										<fieldset class="border p-2">
											<legend class="w-auto float-none fs-6"></legend>

											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="song" value="song" name="interested_sub[]" 

													 <?php echo (in_array("song",$ins_sub)) ? 'checked' : " "; ?> 

												>
												<label class="form-check-label" for="song">Song</label>
										  </div>
										  <div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" size="30" id="dance" value="dance" name="interested_sub[]" 
													
													<?php echo (in_array("dance",$ins_sub)) ? "checked" : " "; ?>
												
												>
												<label class="form-check-label" for="dance">Dance</label>
										  </div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="recitation" value="recitation" name="interested_sub[]" 

														<?php echo (in_array("recitation",$ins_sub)) ? "checked" : " "; ?>

												>
												<label class="form-check-label" for="recitation">Recitation(আবৃত্তি)</label>
										  </div>
										  <div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="drowing" value="drowing" name="interested_sub[]"  

														<?php echo (in_array("drowing",$ins_sub)) ? "checked" : " "; ?> 

												>
												<label class="form-check-label pe-auto" for="drowing">Drowing</label>
										  </div>
										  <div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="acting" value="acting" name="interested_sub[]" 

													<?php echo (in_array("acting",$ins_sub)) ? "checked" : " "; ?>
												>
												<label class="form-check-label" for="acting">Acting</label>
										  </div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="tobol" value="tobol" name="interested_sub[]" 

													<?php echo (in_array("tobol",$ins_sub)) ? "checked" : " "; ?>

												>
												<label class="form-check-label" for="tobol">Tobol</label>
										  </div> 
										</fieldset>
									</td>
								</tr>
								<tr>
									<th scope="row">Gender</th>
									<td>										
												<?php echo $edit_row['gender']; ?>
									</td>
								</tr>
								<tr>
									<th scope="row">Email</th>
									<td><input name="email" class="form-control" type="email" value="<?php echo $edit_row['email'];?>">
											<div class="text-danger">
												<?php
													if(isset($error['email'])) {
														echo $error['email'];
													}
												?>
											</div>
									</td>
								</tr>
								<tr>
									<th scope="row">Username</th>
									<td><input name="username" class="form-control" type="text" value="<?php echo $edit_row['username'];?>">
										<div class="text-danger">
												<?php
													if(isset($error['username'])) {
														echo $error['username'];
													}
												?>
											</div>
									</td>
								</tr>
								<tr>
									<th scope="row">Password</th>
									<td class="input-group">
										<input name="password" class="form-control" id="pass" type="password" value="<?php echo $edit_row['password'];?>">
										<span id="btn" onclick="passHideShow()" class="btn btn-warning btn-sm mx-3">show</span>

									</td>
								</tr>
							  </tbody>

							</table>
							<input class="btn btn-outline-danger ms-4 my-3" type="submit" name="submit" value="Update">
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
	<script src="../assects/js/jquery-3.6.3.min.js"></script>
	<script src="../assects/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="../assects/js/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="../assects/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script src="../assects/js/main.js"></script>
</body>
</html>