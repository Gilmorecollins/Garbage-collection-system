<?php
	require_once '../connect.php';
	$user_id=$_GET['idr'];
	$sql= "UPDATE request SET status='Revoked' WHERE idr = $user_id ";
	$result = mysqli_query($connection,$sql);

	if ($result) {
		header('location:../request.php?success=Request is updated successfuly');
		exit();
	}else {
		$connection->error;
		header('location:../request.php?error=uknown error occured');
		exit();
	}
?>