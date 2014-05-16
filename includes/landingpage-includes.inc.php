<?php
	//start output buffering
	ob_start();
	//these files are required for every secure page of the site
	require 'includes/errors.inc.php';
	require 'includes/mysqli_connect.inc.php';
	require 'includes/config.inc.php';
	require 'includes/functions.inc.php';
	require 'includes/session.inc.php';
	require 'includes/login-logout.inc.php';
	require 'includes/redirect.inc.php';
?>