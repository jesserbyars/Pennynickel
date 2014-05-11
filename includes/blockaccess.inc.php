<?php
	//if the user is logged in...
	if(!isset($loggedin) || $loggedin ==0) {		
		$l = BASEURL . "/index.php";
		header("Location: $l");		
	} else {
		if(!isset($access_level)) {$access_level = 4;}
		if($role < $access_level) {
			$l = BASEURL . "/index.php";
			header("Location: $l");
		}
	}

?>