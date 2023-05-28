<?php 
		
		include_once('../config.php');

		$view_id = $_GET['view_id'] ?? $_GET['get_stu_id'] ?? " ";

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
            <a class="nav-link live" href="./profile.php">View student profile</a>
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
				$view_sql = "SELECT * FROM students WHERE stu_id = '$view_id'";
				$view_result = mysqli_query($connect, $view_sql) or die('view query not run');
				$view_row = mysqli_fetch_assoc($view_result);
		?>


	
	<!-- search field -->
	<div class="container">
		<div class="card shadow w-25 my-4">
			<div class="card-body">
				<form action="">
					<label for="stu-search" class="form-label">Name : </label>
					<input id="stu-search" class="form-control" type="text" name="get_stu_id" placeholder="Search by student id" value="<?php echo $view_id;?>">
					<button class="btn btn-sm btn-info mt-2" type="submit">search</button>
				</form>
			</div>
		</div>
	</div>

<?php
		if(mysqli_num_rows($view_result) > 0) :
?>
	<!-- show profile field -->
	<div class="container">
		<div class="text1">
				<h4 class="text-center my-5" style="display: none;">Delete "<?php echo $view_row['full_name'];?>" Data Successfully.</h4>
		</div>
		<div class="text2">
				<h4 class="text-center my-5" style="display: none;">Delete "<?php echo $view_row['full_name'];?>" Data Unsuccessfull.</h4>
		</div>
		<div class="card showTable my-5 shadow" style="display: block;">
			<div class="card-header">
				<h1>My Profile</h1>
			</div>
			<div class="card-body">
				<div class="profile-head bg-light border" style='background-image: url("../assects/media/img/users/userBG.jpg")'>
					<div class="user-pic">
						<div class="pic">
							<img width="250px" height="250px" class="profile-pic shadow border border-light border-5 rounded-circle" src="../assects/media/img/users/<?php echo $view_row['photo'];?>" alt="Dammy">
							<h2 class="text-center my-2"><?php echo $view_row['full_name'];?></h2>
						</div>
					</div>
				</div>
				
				<div class="user-info-table">
					<table class="table table-bordered">
					  <tbody>
					    <tr>
					      	<th scope="row">Full Name</th>
					      	<td><?php echo $view_row['full_name'];?></td>
					    </tr>
					    <tr>
					      	<th scope="row">Father's Name</th>
					      	<td><?php echo $view_row['father_name'];?></td>
					    </tr>
					    <tr>
					      	<th scope="row">Mother's Name</th>
					      	<td colspan="2"><?php echo $view_row['mother_name'];?></td>
					    </tr>
						<tr>
							<th scope="row">Present Address</th>
							<td><?php echo $view_row['present_address'];?></td>
						</tr>
						<tr>
							<th scope="row">Date of Birth</th>
							<td><?php echo $view_row['date_of_birth'];?></td>
						</tr>
						<tr>
							<th scope="row">Old</th>
							<td><?php echo $view_row['age'];?></td>
						</tr>
						<tr>
							<th scope="row">Occopation</th>
							<td><?php echo $view_row['occupation'];?></td>
						</tr>
						<tr>
							<th scope="row">Phone Number</th>
							<td><?php echo $view_row['phone'];?></td>
						</tr>
						<tr>
							<th scope="row">Interested Subject</th>
							<td><?php echo $view_row['interested_subject'];?></td>
						</tr>
						<tr>
							<th scope="row">Gender</th>
							<td><?php echo $view_row['gender'];?></td>
						</tr>
						<tr>
							<th scope="row">Email</th>
							<td><?php echo $view_row['email'];?></td>
						</tr>
						<tr>
							<th scope="row">Username</th>
							<td><?php echo $view_row['username'];?></td>
						</tr>
						<tr>
							<th scope="row">Password</th>
							<td>
								<input style="outline:none;border: none;" id="pass" type="password" readonly value="<?php echo $view_row['password'];?>">
								<span id="btn" onclick="passHideShow()" class="btn btn-warning btn-sm mx-3">show</span> 
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
			<div class="card-footer py-3">
				<div class="text-end">
				    <a href="#" class="delete_btn" data-id="<?php echo $view_row['id'];?>">Delete</a>
				</div>
			</div>
		</div>
	</div>

		<?php
			else :
				echo "<h3 class='text-center py-5'> Result not found! </h3> ";
			
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

	<script>
	
			$(document).ready(function(){
				
					$('.delete_btn').on("click", function(e){
						e.preventDefault();

						if(confirm('Are you really delete the data?')) {

							let delete_id = $(this).data('id');
							
							$.ajax({
								url : "delete_stu.php",
								method: "POST",
								data: {id: delete_id},
								success: function(data){
									if(data == 1) {
										$('.showTable').css('display','none');
										$('.text1 h4').fadeIn().css('display','block');
										
									}else {
										$('.text2 h4').css('display','block').fadeIn();
										
									}
								}
							});
						}
					});					
			});
		

	</script>
</body>
</html>