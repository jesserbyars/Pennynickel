<?php 

	#Author Name: Jesse Byars, Hunter Nelson, Ramona Cody
	#Assignment : Final - Pennynickel
	#Due Date   : 06/2014

	#set variables to be used in the header
	$page_title = "Create Project";
	$site_name = "Greenwell Bank Project Management";
	//set the access level for the page
	$access_level = 2;
	require 'includes/securepage-includes.inc.php';
	include 'includes/header.inc.php';
?>

<!--this is the content area-->

	<?php
		//insert the data from the form into "projects" if everything is ok
		if($_SERVER['REQUEST_METHOD']=="POST") {
			$pn = !empty($_POST['name']) ? sanitize($dbc, $_POST['name']) : null;
			$pd = !empty($_POST['description']) ? sanitize($dbc, $_POST['description']) : null;
			$status = !empty($_POST['status']) ? sanitize($dbc, $_POST['status']) : null;
			$duedate = !empty($_POST['duedate']) ? sanitize($dbc, $_POST['duedate']) : null;
			$uid = isset($user_id) ? $user_id : null;
			if($pn&&$pd&&$status&&$duedate&&$uid) {
				$q = "INSERT INTO project VALUES (NULL, '$uid', '$status', '$pd', NOW(), '$duedate', 1, '$pn')";
				mysqli_query($dbc, $q);
				if(mysqli_affected_rows($dbc)==1) {
					$l = BASEURL . "/projects.php";
					header("Location: $l");
				} else {
					echo "<p class=\"error\">0 affected Rows!</p>";
				}

			} else {
				echo "<p class=\"error\">Insert Failed!$pn, $pd, $status, $duedate, $uid</p>";
			}
		}
	?>

	<section id="maincontent" class="clear">
		<h1 class="pageheader">Create New Project</h1>
		
		<section id="createproject">
			<form action="create_project.php" method="post" class="inputform">
				<label for="projectname">Project Name: </label>
				<br>
				<input type="text" maxlength="120" id="projectname" name="name">
				<br>
				<label for="projectdescription">Project Description: </label>
				<br>
				<textarea rows="7" cols="50" id="projectdescription" name="description"></textarea>
				<br>
				<label for="projectstatus">Project Status: </label>
				<select id="projectstatus" name="status">
					<!--<option value="1">Active</option>
					<option value="2">On hold</option>
					<option value="3">Completed</option>-->
					<?php getselectvalues($dbc, "status_id", "description", "status"); ?>
				</select>
				<label for="duedate">Due Date: </label>
				<input type="date" name="duedate" id="duedate">
				<input type="submit" value="SAVE" class="submitbutton">

			</form>

		</section>
		
	</section><!--end of maincontent-->

	<?php include 'includes/nav.inc.php'; ?>	

<?php #include help and footer
	require 'includes/help.inc.php';
	require 'includes/footer.inc.php'; 
?>
		