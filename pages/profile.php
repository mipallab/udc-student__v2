<?php include_once('matha.php');?>

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
							<h2 class="text-center my-2">Majadul Islam Pallab</h2>
						</div>
					</div>
				</div>
				
				<div class="user-info-table">
					<table class="table table-bordered">
					  <tbody>
					    <tr>
					      	<th scope="row">Full Name</th>
					      	<td>Majadul Islam Pallab</td>
					    </tr>
					    <tr>
					      	<th scope="row">Father's Name</th>
					      	<td>Mahfuzul Islam</td>
					    </tr>
					    <tr>
					      	<th scope="row">Mother's Name</th>
					      	<td colspan="2">Roushonara</td>
					    </tr>
						<tr>
							<th scope="row">Present Address</th>
							<td>Vill: Chandadnbari, Post:Monohardi, Pouroshova: Monohardi, Thana: Monohardi, Upozila: Monohardi, Dis: Narshindi, Dhaka</td>
						</tr>
						<tr>
							<th scope="row">Date of Birth</th>
							<td>10/03/1998</td>
						</tr>
						<tr>
							<th scope="row">Old</th>
							<td>28</td>
						</tr>
						<tr>
							<th scope="row">Occopation</th>
							<td>Student</td>
						</tr>
						<tr>
							<th scope="row">Phone Number</th>
							<td>+880 1713 564842</td>
						</tr>
						<tr>
							<th scope="row">Interested Subject</th>
							<td>song, dance, recitation, acting, tobla, ganeral member</td>
						</tr>
						<tr>
							<th scope="row">Gender</th>
							<td>Male</td>
						</tr>
						<tr>
							<th scope="row">Email</th>
							<td >pallab@gmail.com</td>
						</tr>
						<tr>
							<th scope="row">Username</th>
							<td>Pallab@123</td>
						</tr>
						<tr>
							<th scope="row">Password</th>
							<td>
								<input style="outline:none;border: none;" id="pass" type="password" readonly value="Pallab">
								<span id="btn" onclick="passHideShow()" class="btn btn-warning btn-sm mx-3">show</span> 
							</td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php include_once('footer.php');?>



