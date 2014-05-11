<?php 

	#Author Name: Jesse Byars, Hunter Nelson, Ramona Cody
	#Assignment : Final - Pennynickel
	#Due Date   : 06/2014

	#set variables to be used in the header
	$page_title = "Login Error";
	$site_name = "Greenwell Bank Project Management";
	//set the access level for the page
	$access_level = -1;
	include 'includes/header.inc.php';
?>

<!--this is the content area-->

	<section id="maincontent" class="clear">
		<h1 class="pageheader">Login Error</h1>
		<?php echo "<p class=\"error\">Invalid Login!</p>\n"; ?>
		
	</section><!--end of maincontent-->

	<?php include 'includes/nav.inc.php'; ?>	

<?php #include help and footer
	require 'includes/help.inc.php';
	require 'includes/footer.inc.php'; 
?>
		