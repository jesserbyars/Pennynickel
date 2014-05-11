<?php #footer.inc.php ?>

<nav>

	<ul id="row1">
		<?php
		//determine which links are available
		if ($role >= 2) { echo '<li><a href="create_project.php" id="create" class="navlink row1 bottomborder">CREATE</a><li>'; }
		if ($role >= 1) { echo '<li><a href="projects.php" class="navlink row1 bottomborder">VIEW PROJECTS</a><li>'; }
		if ($role >= 1) { echo '<li><a href="tasks.php" class="navlink row1 bottomborder">VIEW TASKS</a><li>'; }
		if ($role >= 3) { echo '<li><a href="users.php" class="navlink row1">VIEW USERS</a><li>'; }
		?> 
	</ul>

	<?php
		//determine which links are available
		if ($role >= 2) {
			echo '<ul id="row2">';
				echo '<li><a href="create_project.php" class="navlink row2 bottomborder">PROJECT</a><li>';
				if ($role >= 4) {echo '<li><a href="create_user.php" class="navlink row2">USER</a><li>'; }
			echo '</ul>';
		}
	?>

</nav>
	


