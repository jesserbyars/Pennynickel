<?php

	//DEFINE SITE CONSTANTS
	define("LIVE", TRUE);
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	define("BASEURL", $url);

	//SET DEFAULT TIMEZONE
	date_default_timezone_set('America/Los_Angeles');

	//ERROR MANAGEMENT
	function pennynickel_errors($e_number, $e_message, $e_file, $e_line, $e_vars) {
		$message = "An error occurred in script '$e_file' on line $e_line: $e_message\n";
		$message .= "Date/Time: " . date('n-j-Y H:i:s') . "\n\n";

		if(!LIVE) {
			//show a detailed error message on screen if the site is not live
			echo '<p class="error">' . nl2br($message);
			echo '<pre>' . print_r ($e_vars, 1) . "\n";
			debug_print_backtrace();
			echo '</pre></p>\n';
		} else {
			//log the error to the database if the site is live
			if ($e_number != E_NOTICE) {
				echo '<p class="error">System Error!</p>';
			}

			$file = 'txt/errors.txt';
			file_put_contents($file, $message, FILE_APPEND | LOCK_EX);

			//DATABASE INSERT IS NOT WORKING
			/*$q = "INSERT INTO error VALUES (NULL, '$message', NOW())";
			mysqli_query($GLOBALS['dbc'], $q);*/
		} //end of LIVE check

	} //end of pennynickel_errors function

	set_error_handler ('pennynickel_errors');

?>