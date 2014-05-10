<?php
	//if the user is logged in...
	if(isset($loggedin) && $loggedin ==1) {
		//and their role is set...
		if(isset($role)) {
			//establish a backup default, just in case
			$defaultpage = "projects.php";

			//determine default page by role 1=user, 2=creator, 3=superviewer, 4=admin
			if($role==1) {
				$defaultpage = "projects.php";
			} else if($role==2) {
				$defaultpage = "projects.php";
			} else if($role==3) {
				$defaultpage = "projects.php";
			} else if($role>3) {
				$defaultpage = "users.php";
			}
			header("Location: $defaultpage");
		}
	}
?>