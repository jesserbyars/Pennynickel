<?php 

	#Author Name: Jesse Byars, Hunter Nelson, Ramona Cody
	#Assignment : Final - Pennynickel
	#Due Date   : 06/2014

	#set variables to be used in the header
	$page_title = "Home";
	$site_name = "Greenwell Bank Project Management";

	require 'includes/functions.php';
	require 'includes/mysqli_connect.inc.php';
	require 'includes/session.php';

	if(isset($_GET['logout']) && $_GET['logout'] == 1) {
		session_destroy();
		unset($loggedin);
		unset($user_id);
		unset($username);
		unset($role);
	}
	
	

	//set up session if the form was posted

	if($_SERVER['REQUEST_METHOD']=="POST") {
		$un = isset($_POST['username']) ? sanitize($dbc, $_POST['username']) : null;
		$pass = isset($_POST['pass']) ? sanitize($dbc, $_POST['pass']) : null;
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
			}		
		}
		else {
			session_destroy();
			echo "<p class=\"error\">Invalid Login!</p>\n";
		}
	}

	require 'includes/redirect.inc.php';
	include 'includes/header.inc.php'; 

?>

<!--this is the content area-->

	<section id="maincontent" class="clear">
		<h1 class="pageheader">Landing Page</h1>
		<p class="landingtext">No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! No Happy Talk! </p>

		<form method="POST" action="index.php" class="loginform">
			<label for="username">Username: </label>
			<input type="text" id="username" name="username" class="inputfield" maxlength="40">
			<br>
			<label for="pass">Password: </label>
			<input type="password" id="pass" name="pass" class="inputfield" maxlength="40">
			<input type="submit" value="Log in" class="submitbutton">
		</form>

		
	</section><!--end of maincontent-->

<?php #include help and footer
	require 'includes/help.inc.php';
	include 'includes/footer.inc.php'; 
?>
		