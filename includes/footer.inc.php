<?php #footer.inc.php ?>

		<?php
			if(!empty($errors)) {
				foreach($errors as $e) {
					echo "<p class=\"error\">$e</p>\n<br>\n";
				}
			}
		?>

		</section><!--end of contentwrapper-->

	<footer>
		<section id="footer-left">
			<p>&copy; Greenwell Bank, 2014</p>
		</section><!--end of footer-left-->

		<section id="footer-right">
			<p id="date"></p>
			<p id="time"></p>

		</section><!--end of footer-right-->

	</footer>

</section><!--end of pagewrapper-->
	


</body>

<?php 
	//flush output buffer
	ob_end_flush();
	//close db connection
	mysqli_close($dbc); 

?>

</html>