<?php
function sanitize($db, $string) {
	return mysqli_real_escape_string($db, trim($string));
}

?>