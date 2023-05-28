<?php

	session_start();

	//if Administrator not login
	if(!$_SESSION['ad_login']){
		header('location: ../index.php');
	}

	include_once('../config.php');

	$del_id = $_POST['id'];

			// Delete image
				$del_img_sql = "SELECT photo FROM students WHERE id = '$del_id'";
				$del_img_result = mysqli_query($connect, $del_img_sql) or die('delete image query not run');
				$del_img_row = mysqli_fetch_assoc($del_img_result);


	$del_sql = "DELETE FROM `students` WHERE `id` = {$del_id}";

	if(mysqli_query($connect, $del_sql)) {
		$photo_name = "../assects/media/img/users/".$del_img_row['photo'];
		unlink($photo_name);
		echo 1;
	}else {
		echo 0;
	}
	
?>