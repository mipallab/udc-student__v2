<?php include_once('../config.php');?>


<?php include_once('matha.php');?>

	<div class="container">
		<div class="card my-5 shadow">
			<div class="card-header d-flex justify-content-between align-items-center">
				<div class="">
					<h3>Student List</h3>
					<span>Found 20 result</span>
				</div>
				<div>
					<form class="d-flex">
						<select class="form-select" aria-label="Default select example">
							<option selected>Open this select menu</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
				      	<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				      	<button class="btn btn-outline-danger" type="submit">Search</button>
				    </form>
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
						      	<th scope="col">Full Name</th>
								<th scope="col">Gender</th>
								<th scope="col">Phone</th>
								<th scope="col">Occopation</th>
						      	<th scope="col">Address</th>
						      	<th scope="col">Photo</th>
						      	<th scope="col">Action</th>
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
						      	<td><?php echo $rowTableQuery['full_name'];?></td>
								<td><?php echo $rowTableQuery['gender'];?></td>
								<td><?php echo $rowTableQuery['phone'];?></td>
								<td><?php echo $rowTableQuery['occupation'];?></td>
								<td><?php echo $rowTableQuery['present_address'];?></td>
						      	<td><img src="../assects/media/img/users/<?php echo $rowTableQuery['photo'];?>" alt="users photo"></td>
						      	<td class="text-center">
						      		<a href="./edit.php" class="btn btn-outline-secondary btn-sm">
						      			<i class="bi bi-pencil-fill"></i>
						      		</a>
						      		<a href="./profile.php" class="btn btn-outline-success btn-sm">
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
<?php include_once('footer.php');?>



	<script>
		
		// jQuery('.delete_btn').click(function(){

		// 	let	conf = confirm("Are you sure ? ");

		// 	if(conf = true) {
		// 		return true;
		// 	}
		// 	else {
		// 		return false;
		// 	}
		// });

		function showConfirm(message, callback) {
			let confirmBox = document.createElement('div');
			confirmBox.classList.add('confirm-box');

			let messageBox = document.createElement('div');
			messageBox.classList.add('message-box');
			messageBox.textContent = message;
			confirmBox.appendChild(messageBox);


			let buttonBox = document.createElement('div');
			buttonBox.classList.add('button-box');
			messageBox.appendChild(buttonBox);

			let yesBox = document.createElement('button');
			yesBox.classList.add('yes-box');
			buttonBox.appendChild(yesBox);
			yesBox.textContent = "Yes";
			yesBox.addEventListener('click', yesButtonClick);


			let noBox = document.createElement('button');
			noBox.classList.add('no-box');
			buttonBox.appendChild(noBox);
			noBox.textContent = "No";
			noBox.addEventListener('click', noButtonClick);

			function removeConfirmBox(){
				document.body.removeChild(confirmBox);
			}

			function yesButtonClick() {
				callback(true);
				removeConfirmBox()
			}

			function noButtonClick() {
				callback(false);
				removeConfirmBox()
			}

			document.body.appendChild(confirmBox);
		}
		document.querySelector("#delete-btn").addEventListener('click',()=> {
			showConfirm('Are you Sure? Data will delete.', function(result){
				if(result) {
					console.log('yes');
				}else {
					console.log('no');
				}
			});
		});
		

	</script>

</body>
</html>