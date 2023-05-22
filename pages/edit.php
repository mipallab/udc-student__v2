<?php include_once('matha.php');?>



	<!-- search field -->
	<div class="container">
		<div class="card shadow w-25 my-4">
			<div class="card-body">
				<form action="">
					<label for="stu-search" class="form-label">Name : </label>
					<input id="stu-search" class="form-control" type="text" placeholder="Search by name">
					<button class="btn btn-sm btn-info mt-2" type="submit">search</button>
				</form>
			</div>
		</div>
	</div>

	<!-- show profile field-->
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
					<div class="table-responsive">
						<form action="" method="POST">
							<table class="table table-bordered">
							  <tbody>
							    <tr>
							      	<th scope="row">Full Name</th>
							      	<td><input class="form-control" type="text" value="Majadul Islam Pallab"></td>
							    </tr>
							    <tr>
							      	<th scope="row">Father's Name</th>
							      	<td><input class="form-control" type="text" value="Mahfuzul Islam"></td>
							    </tr>
							    <tr>
							      	<th scope="row">Mother's Name</th>
							      	<td><input class="form-control" type="text" value="Roushonara"></td>
							    </tr>
								<tr>
									<th scope="row">Present Address</th>
									<td><input class="form-control" type="address" value="Vill: Chandadnbari, Post:Monohardi, Pouroshova: Monohardi, Thana: Monohardi, Upozila: Monohardi, Dis: Narshindi, Dhaka"></td>
								</tr>
								<tr>
									<th scope="row">Date of Birth</th>
									<td><input class="form-control" type="date" value=""></td>
								</tr>
								<tr>
									<th scope="row">Old</th>
									<td><input class="form-control" type="num" value="20"></td>
								</tr>
								<tr>
									<th scope="row">Occopation</th>
									<td><input class="form-control" type="text" value="sutdent"></td>
								</tr>
								<tr>
									<th scope="row">Phone Number</th>
									<td><input class="form-control" type="tel" value="+880 1713 564842"></td>
								</tr>
								<tr>
									<th scope="row">Interested Subject</th>
									<td>
										<fieldset class="border p-2">
											<legend class="w-auto float-none fs-6"></legend>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="song" value="song" name="interested_sub">
												<label class="form-check-label" for="song">Song</label>
										  	</div>
										  	<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="dance" value="dance" name="interested_sub">
												<label class="form-check-label" for="dance">Dance</label>
										  	</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="recitation" value="recitation" name="interested_sub">
												<label class="form-check-label" for="recitation">Recitation(আবৃত্তি)</label>
										  	</div>
										  	<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="dance" value="dance" name="interested_sub[]">
												<label class="form-check-label pe-auto" for="dance">Dance</label>
										  	</div>
										  	<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="acting" value="acting" name="interested_sub">
												<label class="form-check-label" for="acting">Acting</label>
										  	</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="tobol" value="tobol" name="interested_sub">
												<label class="form-check-label" for="tobol">Tobol</label>
										  	</div>
										  	<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="ganeral-member" value="ganeral-member" name="interested_sub">
												<label class="form-check-label" for="ganeral-member"> Ganeral Member (সাধারণ সদস্য)</label>
										  	</div>
										</fieldset>
									</td>
								</tr>
								<tr>
									<th scope="row">Gender</th>
									<td>										
										<fieldset class="border p-2">
											<!-- <legend  class="float-none w-auto p-2 fs-6"></legend> -->
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="gender" id="male" value="male">
												<label class="form-check-label" for="male">Male</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="gender" id="female" value="female">
												<label class="form-check-label" for="female">Female</label>
											</div>
										 </fieldset>
									</td>
								</tr>
								<tr>
									<th scope="row">Email</th>
									<td><input class="form-control" type="email" value="pallab@gmail.com"></td>
								</tr>
								<tr>
									<th scope="row">Username</th>
									<td><input class="form-control" type="text" value="pallab"></td>
								</tr>
								<tr>
									<th scope="row">Password</th>
									<td class="input-group">
										<input class="form-control" id="pass" type="password" value="Pallab">
										<span id="btn" onclick="passHideShow()" class="btn btn-warning btn-sm mx-3">show</span>

									</td>
								</tr>
							  </tbody>

							</table>
							<button class="btn btn-sm btn-secondary">+ add filed</button> <br>
							<input class="btn btn-primary my-3" type="submit" value="Update">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include_once('footer.php');?>