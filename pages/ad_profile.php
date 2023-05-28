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
            <a href="./ad_profile.php"><img class="rounded-circle border-warning" src="../assects/media/img/users/<?php echo $admin_row['ad_photo'];?>" alt="" width="50" height="50"></a>
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
							<img width="250px" height="250px" class="profile-pic shadow border border-light border-5 rounded-circle" src="../assects/media/img/users/<?php echo $admin_row['ad_photo'];?>" alt="Dammy">
							<h2 class="text-center my-2"><?php echo $admin_row['ad_name'];?></h2>
						</div>
					</div>
				</div>
				
				<div class="user-info-table">
					<table class="table table-bordered">
					  <tbody>
					    <tr>
					      	<th scope="row">Full Name</th>
					      	<td><?php echo $admin_row['ad_name'];?></td>
					    </tr>
					    <tr>
					      	<th scope="row">Role</th>
					      	<td><button class="btn btn-sm btn-secondary"><?php echo $admin_row['ad_role'];?></button></td>
					    </tr>
						<tr>
							<th scope="row">Email</th>
							<td><?php echo $admin_row['ad_email'];?></td>
						</tr>
						<tr>
							<th scope="row">Username</th>
							<td><?php echo $admin_row['ad_usersname'];?></td>
						</tr>
						<tr>
							<th scope="row">Password</th>
							<td>
								<input style="outline:none;border: none;" id="pass" type="password" readonly value="<?php echo $admin_row['ad_password'];?>">
								<span id="btn" onclick="passHideShow()" class="btn btn-warning btn-sm mx-3">show</span> 
							</td>
						</tr>
					  </tbody>
					</table>
					<a href="./ad_user-edit.php" class="btn btn-sm btn-secondary d-inline">Edit</a>
				</div>
			</div>
		</div>
	</div>
<?php include_once('./footer.php');?>



