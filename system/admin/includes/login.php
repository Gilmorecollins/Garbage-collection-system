<?php 
session_start(); 
include "connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ../index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../index.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        // $pass = md5($pass);
        $pass = md5($pass);
        
		$sql = "SELECT * FROM admin_login WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($connection, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
			$_SESSION['id'] = $row['id'];
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['email'] = $row['email'];
            	header("Location: ../admin/index.php");
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
