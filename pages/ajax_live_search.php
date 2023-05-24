<?php
	include_once('../config.php');

	$search_value = $_POST['search'];
	$search_field = $_POST['src_field'];


	$sql_search = "SELECT * FROM students WHERE `$search_field` LIKE '%{$search_value}%' ORDER BY `id` DESC";
	$sql_result = mysqli_query($connect, $sql_search) or die('SQL query failed');

	$output = "";

	if(mysqli_num_rows($sql_result) > 0) {


		$output .= '


		<div class="userTable table-responsive">
					<table class="table table-striped table-hover table-bordered align-middle">
						<thead>
						    <tr>
						      	<th scope="col">#</th>
						      	<th width="125" scope="col">Student ID</th>
						      	<th width="250" scope="col">Full Name</th>
								<th scope="col">Phone</th>
								<th width="300px" scope="col">Subject</th>
						      	<th width="300" scope="col">Address</th>
						      	<th width="100" scope="col">Photo</th>
						      	<th width="100" scope="col">Action</th>
						    </tr>
						</thead>
					  	<tbody>';
					  		
	

									$sn = 0;
									while($rowSrcQuery = mysqli_fetch_assoc($sql_result)){

										$sn ++; 

									$output .= "<tr>
								                  <th scope='row'>{$sn}</th>
								                  <th>{$rowSrcQuery["stu_id"]}</th>
								                  <td>{$rowSrcQuery["full_name"]}</td>
								                  <td>{$rowSrcQuery["phone"]}</td>
								                  <td>{$rowSrcQuery["interested_subject"]}</td>
								                  <td>{$rowSrcQuery["present_address"]}</td>
								                  <td><img src='../assects/media/img/users/{$rowSrcQuery["photo"]}'</td>
								                  <td class='text-center'>
											      		<a href='./edit.php' class='btn btn-outline-secondary btn-sm'>
											      			<i class='bi bi-pencil-fill'></i>
											      		</a>
											      		<a href='./profile.php' class='btn btn-outline-success btn-sm'>
											      			<i class='bi bi-person-fill'></i>
											      		</a>
											      	</td>
								                  
								                </tr>";

									}

							
				$output .= '</tbody>
					</table>
				</div>'	;    	
					  	



				mysqli_close($connect);


				echo $output;


	}else {
		echo "<h4 class='text-center py-5'>No Record Found...😢😢😢 </h4>";
	}

?>


