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
				<?php echo "<h1>$site_name</h1>\n"; ?>
				
			</section><!--end of header-left-->

			<section id = "header-right">
				<?php 
					if(isset($loggedin) && $loggedin==1) {
						echo "<p class=\"userdata\"><a href=\"index.php\" class=\"homelink\">$username</a></p>\n";
						echo "<p class=\"userdata\">$rolename</p>\n";	
					}
					
				?>

				<p class="helplink">HELP</p>

				
			</section><!--end of header-right-->

		</header>

		<section id = "contentwrapper" class="clear">
