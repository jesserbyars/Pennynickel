<?php

	$loginerror = null;
	//if loutout get variable is set to 1, logout: destroy session and unset shortcut vars
	if(isset($_GET['logout']) && $_GET['logout'] == 1) {
		session_destroy();
		unset($loggedin);
		unset($user_id);
		unset($username);
		unset($role);
	}
	
	//set up session if the form was posted
	if($_SERVER['REQUEST_METHOD']=="POST") {
		$un = isset($_POST['username']) && !empty($_POST['username']) ? sanitize($dbc, $_POST['username']) : null;
		$pass = isset($_POST['pass']) && !empty($_POST['pass']) ? sanitize($dbc, $_POST['pass']) : null;
		if(isset($un, $pass)) {
			$q = "SELECT user_id, role_id, username FROM user WHERE username='$un' AND pass=SHA1('$pass') LIMIT 1";
			$r = mysqli_query($dbc, $q);
			if(mysqli_num_rows($r) == 1) {
				$row = mysqli_fetch_assoc($r);
				$_SESSION['loggedin'] = 1;
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['role'] = $row['role_id'];
				$loggedin = 1;
				$user_id = $_SESSION['user_id'];
				$username = $_SESSION['username'];
				$role = $_SESSION['role'];
			} else {
				$loginerror = "Invalid Username/Password Combination";
			}
		} else {
			session_destroy();
			$loginerror = "Username/Password field was empty";
		}
	}
?>