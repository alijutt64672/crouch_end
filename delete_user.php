<?php

	include('db/connection.php');
	$id = $_GET['id'];
	$delete_user = mysqli_query($conn,"UPDATE user SET is_deleted = 0 WHERE id = '$id';");
	if($delete_user){
		header("Location: active_users.php");
	}

?>