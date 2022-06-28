<?php 
session_start(); 
include "../templates/connect.php";

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
		header("Location: ../index.php?error=email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        // $pass = md5($pass);
        $pass = md5($pass);
        
		$sql = "SELECT * FROM admin WHERE email='$uname' AND password='$pass'";

		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
			$_SESSION['id'] = $row['id'];
            	$_SESSION['email'] = $row['email'];
			echo "login success";
            	header("Location: ../templates/index.php");
		        exit();
            }else{
				header("Location: ../index.php?error=Incorrect Username or password");
		        exit();
			}
		}else{
			// echo "failed to query db";
			header("Location: ../index.php?error=user does not exist");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
