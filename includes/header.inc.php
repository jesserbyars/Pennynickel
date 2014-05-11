<?php #header.inc.php 


?>

<!doctype html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>

			<?php 
				#set a default title if the variable is not set
				if(isset($page_title)) {
				echo $page_title;
				} else {
					echo "No title";
				}
			?>

	</title>
	<!--css with media queries for breakpoints-->
	<link rel="stylesheet" href="styles/styles.css" media="screen">

	<!--include javascript-->
	<script src="scripts/jquery-1.10.2.min.js"></script>
	<script src="scripts/jessefunctions.js"></script>
	<script src="scripts/mainscript.js"></script>

</head>

<body>

	<section id="pagewrapper">

		<header class="clear">
			
			<section id = "header-left">
				<?php echo "<h1><a href=\"index.php\" class=\"homelink\">$site_name</a></h1>\n"; ?>
				
			</section><!--end of header-left-->

			<section id = "header-right">

				<?php 
					if(isset($loggedin) && $loggedin==1) {
						echo "<p class=\"headerlink\"><a href=\"index.php?logout=1\" class=\"homelink\">Log Out</a></p>\n";
					}
				?>
				
				<p class="helplink">Help</p>

				<?php 
					if(isset($loggedin) && $loggedin==1) {
						echo "<p class=\"headerlink\"><a href=\"singleuser.php\" class=\"homelink\">$rolename</a></p>\n";
						echo "<p class=\"headerlink\"><a href=\"index.php\" class=\"homelink\">$username</a></p>\n";
					}
					
				?>

				

				
			</section><!--end of header-right-->

		</header>

		<section id = "contentwrapper" class="clear">
