<?php
	//start the session
	session_start();

	//create shortcuts for SESSION variables, with defaults (should be null)
	$loggedin = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : 0;
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
	$username = isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
	$role = isset($_SESSION['role']) ? $_SESSION['role'] : NULL;

	if($loggedin==1) {
		//get the name of the role
		$q="SELECT description FROM role WHERE role_id = $role";
		$r = mysqli_query($dbc, $q);
		$row = mysqli_fetch_assoc($r);
		$rolename = $row['description'];	
	}
	
?>