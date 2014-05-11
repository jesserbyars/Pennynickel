<?php 

	#Author Name: Jesse Byars, Hunter Nelson, Ramona Cody
	#Assignment : Final - Pennynickel
	#Due Date   : 06/2014

	#set variables to be used in the header
	$page_title = "Home";
	$site_name = "Greenwell Bank Project Management";

	require 'includes/landingpage-includes.inc.php';
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
			<?php 
				if(isset($loginerror)) { echo "<p class=\"error\">$loginerror</p>\n"; }
			?>
		</form>

		
	</section><!--end of maincontent-->

<?php #include help and footer
	require 'includes/help.inc.php';
	require 'includes/footer.inc.php'; 
?>
		