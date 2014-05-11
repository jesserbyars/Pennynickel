<?php 

	#Author Name: Jesse Byars, Hunter Nelson, Ramona Cody
	#Assignment : Final - Pennynickel
	#Due Date   : 06/2014

	#set variables to be used in the header
	$page_title = "Add a new task";
	$site_name = "Greenwell Bank Project Management";
	//set the access level for the page
	$access_level = 2;
	require 'includes/securepage-includes.inc.php';
	include 'includes/header.inc.php';
?>

<!--this is the content area-->

	<section id="maincontent" class="clear">
		<h1 class="pageheader">Create Task</h1>
		<h2 class="pagesubtitle">Add a new task to (Project Name)</h2>
		<p>This is the add task view.</p>
		
	</section><!--end of maincontent-->

	<?php include 'includes/nav.inc.php'; ?>	

<?php #include help and footer
	require 'includes/help.inc.php';
	require 'includes/footer.inc.php'; 
?>
		