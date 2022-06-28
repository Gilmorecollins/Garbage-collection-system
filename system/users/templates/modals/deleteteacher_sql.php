<?php
	require_once '../includes/connect.php';
	$teacher_id=$_GET['id'];
	$sql= "DELETE FROM request WHERE user_id='$teacher_id'";
	$result = mysqli_query($connection,$sql);

	if ($result) {
		header('location:../request.php?success=teacher deleted successfull');
		exit();
	}else {
		header('location:../request.php?error=uknown error occured');
		exit();
	}
?>