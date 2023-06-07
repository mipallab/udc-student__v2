<?php

	session_start();

	//if Administrator not login
	if(!$_SESSION['ad_login']){
		header('location: ../index.php');
	}


	include_once("../config.php");

	//pagination code here 
	$limit_per_page = 10;
	
	$page = "";
	if(isset($_POST["page_no"])){
		$page = $_POST["page_no"];
	}else {
		$page = 1;
	}
 
	$offset = ($page -1) * $limit_per_page;

	//query start
		$sqlTableSelect = "SELECT * FROM students ORDER BY id DESC LIMIT {$offset},{$limit_per_page} "; 
		$runTableQuery = mysqli_query($connect, $sqlTableSelect) or die('Table query not run');
		$output = ' ';
		if(mysqli_num_rows($runTableQuery) > 0 ){

			$output .= '<div class="card my-5 shadow">
				<div class="card-header d-flex justify-content-between align-items-center">
					<div class="">
						<h3>Student List</h3>
					</div>
				</div>
				<div class="card-body">
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
							      	<th width="150" scope="col">Action</th>
							    </tr>
							</thead>
						  	<tbody>';

						  	$sn = 0;
				while($rowTableQuery = mysqli_fetch_assoc($runTableQuery)) {
					$sn ++;
					$output .= "<tr>
							      	<th scope='row'> $sn </th>
							      	<th scope='row'>{$rowTableQuery["stu_id"]} </th>
							      	<td>{$rowTableQuery["full_name"]}</td>
									<td>{$rowTableQuery["phone"]}</td>
									<td>{$rowTableQuery["interested_subject"]}</td>
									<td>{$rowTableQuery["present_address"]}</td>
							      	<td><img src='../assects/media/img/users/{$rowTableQuery["photo"]}' alt='users photo'></td>
							      	<td class='text-center'>
							      		<a data-bs-toggle='tooltip' data-bs-placement='bottom' title='Payment' href='./payment/add-payment-page.php?edit_id={$rowTableQuery["stu_id"]}' class='btn btn-outline-warning btn-sm'>
							      			
							      			<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-currency-dollar' viewBox='0 0 16 16'>
											  <path d='M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z'/>
											</svg>

							      		</a>
							      		<a data-bs-toggle='tooltip' data-bs-placement='bottom' title='Edit' href='./edit.php?edit_id={$rowTableQuery["stu_id"]}' class='btn btn-outline-secondary btn-sm'>
							      			<i class='bi bi-pencil-fill'></i>
							      		</a>
							      		<a data-bs-toggle='tooltip' data-bs-placement='bottom' title='Profile' href='./profile.php?view_id={$rowTableQuery["stu_id"]}' class='btn btn-outline-success btn-sm'>
							      			<i class='bi bi-person-fill'></i>
							      		</a>
							      	</td>
						    	</tr>";
				}



			$output .= "</tbody> </table></div> </div> </div>";

			$sql_total = "SELECT * FROM students";
			$records = mysqli_query($connect, $sql_total) or die("pagination Query Unsuccessful");
			$total_record = mysqli_num_rows($records);
			$total_pages = ceil($total_record / $limit_per_page);

			$output .= '<nav class="py-5">
			  <ul id="pagination" class="pagination justify-content-center">';

			for($i=1; $i <= $total_pages; $i++) {
				if($i == $page){
					$class = "active";
				}
				else {
					$class = ' ';
				}
				$output .= "<li class='page-item mx-1 {$class}'>
			      				<a id='{$i}' class='page-link' href=''>{$i}</a>
			    			</li>";
			}

	$output .= '
			  </ul>
			</nav>';

			echo $output;

		}else{
			echo "<h3 class=". "text-center py-5" .">No Record Found...😢😢😢 </h3>";
		}
					

			






			



?>