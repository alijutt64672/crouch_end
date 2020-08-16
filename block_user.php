<?php

	include('db/connection.php');
	$id = $_GET['id'];
	$block_user = mysqli_query($conn,"UPDATE user SET status = 0 WHERE id = '$id';");
	if($block_user){
		header("Location: blocked_users.php");
	}

?>