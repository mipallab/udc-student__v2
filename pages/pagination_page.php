<?php

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
							      	<th width="100" scope="col">Action</th>
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
							      		<a href='./edit.php?edit_id={$rowTableQuery["stu_id"]}' class='btn btn-outline-secondary btn-sm'>
							      			<i class='bi bi-pencil-fill'></i>
							      		</a>
							      		<a href='./profile.php?view_id={$rowTableQuery["stu_id"]}' class='btn btn-outline-success btn-sm'>
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