<?php
//include autoload
include_once('../autoload.php');


	if(isset($_POST['submit'])) {

		$error = array();
		//POST data
			$fullName 				= $_POST['full_name'] ;
		    $fatherName 			= $_POST['fathers_name'];
		    $motherName 			= $_POST['mothers_name'];
		    $address 				= $_POST['address'] ;
		    $dob 					= $_POST['date_of_birth'] ;
		    $old 					= $_POST['old'] ;
		    $occopation 			= $_POST['occopation'] ;
		    $phone 					= $_POST['phone'] ;		   
		    $gender					= $_POST['gender'] ;
		    $email 					= $_POST['email'] ;
		    $username 				= $_POST['username'] ;
		    $new_password			= $_POST['new-password'] ;
		    $confarm_password		= $_POST['confarm-password'] ;

		//confarm password match
		    if($new_password != $confarm_password) {
		    	$error['con_password'] = 'Password not match!';
		    }
		    
	    //interested subject
		    $interested = $_POST['interested_sub'];
			$chk = '';
			foreach($interested as $chk1)  
		   	{  
		      $chk .= $chk1.", ";  
		   	}  
		   	$interested_sub = substr($chk,0,-2);

		//image setup
		   	$photo_name = $_FILES['up_photo']['name'];
		   	$photo_size = $_FILES['up_photo']['size'];
		   	$photo_tmp = $_FILES['up_photo']['tmp_name'];


		   	$check = getimagesize($photo_tmp);
		   	$target_dir = "../assects/media/img/users/";
		   	$target_file = $target_dir.basename($photo_name);
		   	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if($check = false) {
		   		$error['photo'] = 'This is not an image file';
		   	
		   	}else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		   		$error['photo'] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
		   	
		   	}else if($photo_size > 5242880) {
		   		$error['photo'] = 'Your file size too long';
		   	
		   	}else if(file_exists($target_file)){
		   		$error['photo'] = 'Sorry, File already exists, try another image';
		   	}
		   	

		   	
		if(count($error) === 0) {

			//send data
				move_uploaded_file($photo_tmp, $target_dir.$photo_name);

			//send query
				$sql = "INSERT INTO students(full_name, father_name, mother_name, present_address, date_of_birth, age, occupation, phone, interested_subject, gender, email, username, password, photo) VALUES ('$fullName', '$fatherName', '$motherName', '$address', '$dob', '$old', '$occopation', '$phone', '$interested_sub', '$gender', '$email', '$username', '$new_password', '$photo_name')";
				mysqli_query($connect, $sql) or die('query not send');

		}

	}

?>

<?php include_once('matha.php');?>
	
	<div class="container">
		<div class="reg-table ">
			<div class="regtable mx-auto">
				<div class="card my-5 shadow">
				<div class="card-header">
					<h3>Student Sign Up From</h3>
				</div>
				<div class="card-body">
					<form action="#" method="POST" enctype="multipart/form-data">
						<!-- full name field -->
						<div class="fullNameField mb-3">
							<label class="form-label" for="fullname mt-2">Full Name</label> <br>
							<input class="px-2 form-control" id="fullname" type="text" required name="full_name" value="<?php echo (isset($fullName)) ? ($fullName) : ("");?>">
							<span class="form-text">Must match NID or DOB card</span>
						</div>

						<!-- father name field -->
						<div class="fatherNameField mb-3">
							<label class="form-label" for="fathersname mt-2">Father's Name</label><br>
							<input class="px-2 form-control" id="fathersname" type="text" required name="fathers_name" value="<?php echo (isset($fatherName)) ? ($fatherName) : ("");?>">
						</div>

						<!-- mother name filed -->
						<div class="motherNameField mb-3">
							<label class="form-label" for="mothersname mt-2">Mother's Name</label><br>
							<input class="px-2 form-control" id="mothersname" type="text" required name="mothers_name" value="<?php echo (isset($motherName)) ? ($motherName) : ("");?>">
						</div>

						<!-- present address filed -->
						<div class="presentAddress mb-3">
							<label class="form-label" for="address mt-2">Present Address</label><br>
							<input class="px-2 form-control" id="address" type="address" required name="address" value="<?php echo (isset($address)) ? ($address) : ("");?>">
						</div>
						
						<!-- Date of birth filed -->
						<div class="nameField mb-3">
							<label class="form-label" for="dofdate mt-2">Date of Birth</label><br>
							<input class="px-2 form-control" id="dofdate" onchange="ageCalculator()" type="date" required name="date_of_birth" value="<?php echo (isset($dob)) ? ($dob) : ("");?>">
						</div>

						<!-- old field -->
						<div class="oldField mb-3">
							<label class="form-label" for="old mt-2">Your Old</label><br>
							<input class="px-2 form-control old"  id="old" type="text" required readonly name="old" value="<?php echo (isset($old)) ? ($old) : ("");?>">
						</div>

						<!-- occopation field -->
						<div class="nameField mb-3">
							<label class="form-label" for="occopation mt-2">Occopation</label><br>
							<input class="px-2 form-control" id="occopation" type="text" required name="occopation" value="<?php echo (isset($occopation)) ? ($occopation) : ("");?>">
						</div>

						<!-- phone filed -->
						<div class="nameField mb-3">
							<label class="form-label" for="nubmer mt-2">Phone Number</label><br>
							<input class="px-2 form-control" id="nubmer" type="tel" required name="phone" value="<?php echo (isset($phone)) ? ($phone) : ("");?>">
						</div>

						<!-- interested subject -->
						<div class="interested-nameField mb-3">			
							<fieldset class="border p-2">
								<legend class="w-auto float-none p-2 fs-6">The interested subject</legend>
								<div class="form-check form-check-inline">
									<input class="form-check-input"  type="checkbox" id="song" value="song" name="interested_sub[]" required>
									<label class="form-check-label pe-auto" for="song">song</label>
							  	</div>
							  	<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="dance" value="dance" name="interested_sub[]">
									<label class="form-check-label pe-auto" for="dance">dance</label>
							  	</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="recitation" value="recitation" name="interested_sub[]">
									<label class="form-check-label pe-auto" for="recitation">Recitation(আবৃত্তি)</label>
							  	</div>
							  	<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="acting" value="acting" name="interested_sub[]">
									<label class="form-check-label pe-auto" for="acting">acting</label>
							  	</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="tobol" value="tobol" name="interested_sub[]">
									<label class="form-check-label pe-auto" for="tobol">tobol</label>
							  	</div>
							  	<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="ganeral-member" value="ganeral-member" name="interested_sub[]">
									<label class="form-check-label pe-auto" for="ganeral-member"> ganeral member (সাধারণ সদস্য)</label>
							  	</div>
							</fieldset>
							<hr>
						</div>

						<!-- Gender -->
						<div class="gendreField mb-3">
							<fieldset class="border p-2">
								<legend  class="float-none w-auto p-2 fs-6">Gender</legend>
								<div class="form-check form-check-inline">
									<input class="form-check-input"  type="radio" name="gender" id="male" value="male" alue="<?php echo (isset($gender)) ? ($phone) : ("");?>" required>
									<label class="form-check-label" for="male">Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input"  type="radio" name="gender" id="female" value="female" alue="<?php echo (isset($gender)) ? ($phone) : ("");?>">
									<label class="form-check-label" for="female">Female</label>
								</div>
							 </fieldset>
						</div>

						<!-- email filed -->
						<div class="emailField mb-3">
							<label class="form-label" for="email mt-2">Email</label><br>
							<input class="px-2 form-control" id="email" type="email" name="email" required value="<?php echo (isset($email)) ? ($email) : ("");?>">
						</div>

						<!-- username -->
						<div class="userField mb-3">
							<label class="form-label" for="username mt-2">Username</label><br>
							<input class="px-2 form-control" id="username" type="text" name="username" required value="<?php echo (isset($username)) ? ($username) : ("");?>">
						</div>

						<!-- new password -->
						<div class="userPass mb-3">
							<label class="form-label" for="password">Password</label><br>
							<input class="px-2 form-control" id="password" type="password" name="new-password" required value="<?php echo (isset($new_password)) ? ($new_password) : ("");?>">
						</div>

						<!-- comfarm password -->
						<div class="userConPass mb-3">
							<label class="form-label" for="conpass">Comfarm Password</label><br>
							<input class="px-2 form-control" id="conpass" type="password" name="confarm-password" required value="<?php echo (isset($confarm_password)) ? ($confarm_password) : ("");?>">
							<div class="form-text text-danger">
								<?php
									if(isset($error['con_password'])) {
										echo $error['con_password'];
									}
								?>
							</div>
						</div>

						<!-- photo upload -->
						<div class="fieldfile">
							<div class="row g-3 align-items-center">
							  	<div class="col-auto ">
							    	<label for="imgfile" class="col-form-label">Upload your Photo</label>
							  	</div>
							  	<div class="col-auto">
							    	<input type="file" id="imgfile" class=" image fileimg form-control" aria-describedby="fileHelpInline" name="up_photo" required>
							  	</div>
							  	<div class="col-auto">
							    	<span id="fileHelpInline" class="form-text">
							      image < 5MB
							    	</span>
							  	</div>
							  	<div class="my-4 text-danger">
									<?php
										if(isset($error['photo'])) {
											echo $error['photo'];
										}
									?>
								</div>
							</div>
							<div class="photo border m-3 p-3">
								<img class="livephoto  border" src="../assects/media/img/dammy.png" alt="Dammy Pic" >								
							</div>
						</div>
						<input class="mt-3 btn btn-primary" type="submit" value="Sign up" name="submit">
					</form>


				</div>
				<div class="card-footer">
					<a href="../index.php">I've already account. Let me log.</a>
				</div>
				</div>
			</div>
		</div>
	</div>

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
	
	<!-- main script -->
	<script src="../assects/js/main.js"></script>

</body>
</html>