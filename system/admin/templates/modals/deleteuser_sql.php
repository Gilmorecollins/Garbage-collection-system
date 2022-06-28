<?php
	require_once '../connect.php';
	$user_id=$_GET['id'];
	$sql= "DELETE FROM users WHERE id='$user_id'";
	$result = mysqli_query($connection,$sql);

	if ($result) {
		header('location:../users.php?success=user deleted successfull');
		exit();
	}else {
		header('location:../users.php?error=uknown error occured');
		exit();
	}
?>