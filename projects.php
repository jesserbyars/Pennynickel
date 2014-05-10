<?php 

	#Author Name: Jesse Byars, Hunter Nelson, Ramona Cody
	#Assignment : Final - Pennynickel
	#Due Date   : 06/2014

	#set variables to be used in the header
	$page_title = "View Projects";
	$site_name = "Greenwell Bank Project Management";

	require 'includes/functions.php';
	require 'includes/mysqli_connect.inc.php';
	require 'includes/session.php';
	include 'includes/header.inc.php'; 

?>

<!--this is the content area-->

	<section id="maincontent" class="clear">
		<h1 class="pageheader">Your Projects</h1>
		<p>This is the projects view.</p>

		<p><a href="index.php?logout=1">Log Out</a></p>
		
	</section><!--end of maincontent-->

	<?php include 'includes/nav.inc.php'; ?>	

<?php #include help and footer
	require 'includes/help.inc.php';
	include 'includes/footer.inc.php'; 
?>
		