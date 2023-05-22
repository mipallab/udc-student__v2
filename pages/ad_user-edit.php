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
					<div class="table-responsive">
						<form action="" method="POST">
							<table class="table table-bordered">
							  <tbody>
							    <tr>
							      	<th scope="row">Full Name</th>
							      	<td><input class="form-control" type="text" value="Rahemul Islam Showrav"></td>
							    </tr>
							    <tr>
							      	<th scope="row">Role</th>
							      	<td>
								      	<select class="form-select">
										  	<option selected>Select </option>
										  	<option value="administrato">Administrator</option>
										  	<option value="editor">Editor</option>
										  	<option value="user">User</option>
										</select>
									</td>
							    </tr>
								<tr>
									<th scope="row">Email</th>
									<td><input class="form-control" type="email" value="rishowrav@gmail.com"></td>
								</tr>
								<tr>
									<th scope="row">Username</th>
									<td><input class="form-control" type="text" value="rishowrav"></td>
								</tr>
								<tr>
									<th scope="row">Password</th>
									<td class="input-group">
										<input class="form-control" id="pass" type="password" value="123412">
										<span id="btn" onclick="passHideShow()" class="btn btn-warning btn-sm mx-3">show</span>

									</td>
								</tr>
							  </tbody>
							</table>
							
							<input class="btn btn-sm btn-outline-primary my-3 d-inline ms-2" type="submit" value="Update">
							<a href="./ad_profile.php" class="btn btn-sm btn-secondary d-inline ms-5">My Profile</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include_once('./footer.php');?>