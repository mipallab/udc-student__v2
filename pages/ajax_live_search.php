<?php
	session_start();

	//if Administrator not login
	if(!$_SESSION['ad_login']){
		header('location: ../index.php');
	}

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
						      	<th width="150" scope="col">Action</th>
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
												        <a target='_blank' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Payment' href='./payment/add-payment-page.php?edit_id={$rowSrcQuery["stu_id"]}' class='btn btn-outline-warning btn-sm'>
											      			
											      			<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-currency-dollar' viewBox='0 0 16 16'>
															  <path d='M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z'/>
															</svg>

											      		</a>
									      				<a target='_blank' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Edit' href='./edit.php?edit_id={$rowSrcQuery["stu_id"]}' class='btn btn-outline-secondary btn-sm'>
							      									<i class='bi bi-pencil-fill'></i>
							      						</a>
							      						<a target='_blank' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Profile' href='./profile.php?view_id={$rowSrcQuery["stu_id"]}' class='btn btn-outline-success btn-sm'>
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


