<?php include_once('../config.php');?>


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
            <a class="nav-link " href="./signup.php">Student Signup Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link live" href="./table.php">All Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./search.php">Search Student</a>
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
			<div class="card-header d-flex justify-content-between align-items-center">
				<div class="">
					<h3>Student List</h3>
				</div>
			</div>
			<div class="card-body">

				<?php

					//query start
						$sqlTableSelect = "SELECT * FROM students ORDER BY id DESC";
						$runTableQuery = mysqli_query($connect, $sqlTableSelect) or die('Table query not run');

						if(mysqli_num_rows($runTableQuery) > 0 ):
				?>
				<div class="userTable table-responsive">
					<table class="table table-striped table-hover table-bordered align-middle">
						<thead>
						    <tr>
						      	<th scope="col">#</th>
						      	<th width="150" scope="col">Student ID</th>
						      	<th width="250" scope="col">Full Name</th>
								<th scope="col">Phone</th>
								<th width="300px" scope="col">Subject</th>
						      	<th width="300" scope="col">Address</th>
						      	<th width="100" scope="col">Photo</th>
						      	<th width="100" scope="col">Action</th>
						    </tr>
						</thead>
					  	<tbody>
					  		<?php
	

									$sn = 0;
									while($rowTableQuery = mysqli_fetch_assoc($runTableQuery)):

										$sn ++;


							?>
					    	<tr>
						      	<th scope="row"><?php echo $sn;?></th>
						      	<th scope="row"><?php echo $rowTableQuery['stu_id'];?></th>
						      	<td><?php echo $rowTableQuery['full_name'];?></td>
										<td><?php echo $rowTableQuery['phone'];?></td>
										<td><?php echo $rowTableQuery['interested_subject'];?></td>
										<td><?php echo $rowTableQuery['present_address'];?></td>
						      	<td><img src="../assects/media/img/users/<?php echo $rowTableQuery['photo'];?>" alt="users photo"></td>
						      	<td class="text-center">
						      		<a href="./edit.php?edit_id=<?php echo $rowTableQuery['stu_id'];?>" class="btn btn-outline-secondary btn-sm">
						      			<i class="bi bi-pencil-fill"></i>
						      		</a>
						      		<a href="./profile.php?view_id=<?php echo $rowTableQuery['stu_id'];?>" class="btn btn-outline-success btn-sm">
						      			<i class="bi bi-person-fill"></i>
						      		</a>
						      	</td>
					    	</tr>
							<?php
								endwhile;
							?>
					  	</tbody>
					</table>
				</div>
				<?php else :
 					echo "<h3 class='text-center py-5'>No Record Found...😢😢😢 </h3>";
				endif;
				?>

			</div>
		</div>
		
	</div>
				<nav class="py-5">
			  <ul class="pagination justify-content-center">
			    
			    <li class="page-item mx-1">
			    	<a class="page-link" href="#">1</a>
			    </li>
			    <li class="page-item mx-1 active">
			      <a class="page-link" href="#">2</a>
			    </li>
			    <li class="page-item mx-1">
			    	<a class="page-link" href="#">3</a></li>
			  </ul>
			</nav>
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