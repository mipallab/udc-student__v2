<?php 
		
		include_once('../config.php');

		//$edit_id = $_GET['edit_id'] ?? $_GET['get_stu_id'] ?? " ";


		if(isset($_POST['submit'])) {

		$error = array();
		//POST data
		    $fullname 				= $_POST['fullname'] ;
		    $role 						= $_POST['role'] ;	   
		    $email 						= $_POST['email'] ;
		    $username 				= $_POST['username'] ;
		    $password					= $_POST['password'] ;


	echo "<pre>";
	print_r($_POST);  	
	echo "</pre>";  	

		   	
		if(count($error) === 1) {


			//send query
				$sql = "UPDATE `administrator_users` SET ad_name = '$fullname', ad_role = '$role', ad_usersname = '$username', ad_email = '$email', ad_password ='$password' WHERE `stu_id` = '$edit_id'";
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
            <a class="nav-link" href="./edit.php">Edit student profile</a>
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



 	<div class="container">
		<div class="card my-5 shadow">
			<div class="card-header">
				<h1>My Profile</h1>
			</div>
			<div class="card-body">
				<div class="profile-head bg-light border" style='background-image: url("../assects/media/img/users/userBG.jpg")'>
					<div class="user-pic">
						<div class="pic">
							<img width="250px" height="250px" class="profile-pic shadow border border-light border-5 rounded-circle" src="../assects/media/img/dammy.png" alt="Dammy">
							<h2 class="text-center my-2">Rahemul Islam Showrav</h2>
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
							      	<td><input class="form-control" type="text" value="Rahemul Islam Showrav" name="fullname"></td>
							    </tr>
							    <tr>
							      	<th scope="row">Role</th>
							      	<td>
								      	<select class="form-select" name="role">
												  	<option selected>Select </option>
												  	<option value="administrator">Administrator</option>
												  	<option value="editor">Editor</option>
												  	<option value="user">User</option>
												</select>
									</td>
							    </tr>
								<tr>
									<th scope="row">Email</th>
									<td><input class="form-control" type="email" value="rishowrav@gmail.com" name="email"></td>
								</tr>
								<tr>
									<th scope="row">Username</th>
									<td><input class="form-control" type="text" value="rishowrav" name="username"></td>
								</tr>
								<tr>
									<th scope="row">Password</th>
									<td class="input-group">
										<input class="form-control" id="pass" type="password" value="123412" name="password">
										<span id="btn" onclick="passHideShow()" class="btn btn-warning btn-sm mx-3">show</span>

									</td>
								</tr>
							  </tbody>
							</table>
							
							<input class="btn btn-sm btn-outline-primary my-3 d-inline ms-2" type="submit" value="Update" name="submit">
							<a href="./ad_profile.php" class="btn btn-sm btn-secondary d-inline ms-5">My Profile</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include_once('./footer.php');?>