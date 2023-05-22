<?php include_once('./matha.php');?>
	
	
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
					<table class="table table-bordered">
					  <tbody>
					    <tr>
					      	<th scope="row">Full Name</th>
					      	<td>Rahemul Islam Showrav</td>
					    </tr>
					    <tr>
					      	<th scope="row">Role</th>
					      	<td><button class="btn btn-sm btn-secondary">Administrator</button></td>
					    </tr>
						<tr>
							<th scope="row">Email</th>
							<td>rishowrav@gmail.com</td>
						</tr>
						<tr>
							<th scope="row">Username</th>
							<td>showrav@123</td>
						</tr>
						<tr>
							<th scope="row">Password</th>
							<td>
								<input style="outline:none;border: none;" id="pass" type="password" readonly value="123412">
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



