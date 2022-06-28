<?php
	require_once '../connect.php';
	$payment_id=$_GET['pid'];
	$sql= "UPDATE payments SET status='Recived' WHERE pid = $payment_id ";
	$result = mysqli_query($connection,$sql);

	if ($result) {
		header('location:../payments.php?success=Request is updated successfuly');
		exit();
	}else {
		$connection->error;
		header('location:../payments.php?error=uknown error occured');
		exit();
	}
?>