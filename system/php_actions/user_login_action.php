<?php 
session_start(); 
include ('../includes/connect.php');

if (isset($_POST['email']) && isset($_POST['pass'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['pass']);

	if (empty($uname)) {
		header("Location: ../login.php?error=email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../login.php?error=Password is required");
	    exit();
	}else{
		$pass = md5($pass);
		$sql = "SELECT * FROM users WHERE email='$uname' AND pass='$pass'  AND plan_status='1' ";
		$result = mysqli_query($connection,$sql);		
		if(mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['pass'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
			
            	header("Location:../users/templates/index.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorrect student id or password");
		        exit();
			}
		}
		$sql2 = "SELECT * FROM users WHERE email='$uname' AND pass='$pass' AND plan_status='0'";
		$result2 = mysqli_query($connection,$sql2);		
		if(mysqli_num_rows($result2) === 1) {
			$row = mysqli_fetch_assoc($result2);
            if ($row['email'] === $uname && $row['pass'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
			echo 'plan not selected';
            	header("Location:../users/plan.php");
		        exit();
            }else{
				header("Location: login.php?error=Incorrect student id or password");
		        exit();
			}
		}}
	
}else{
	header("Location: ../login.php");
	exit();
}
