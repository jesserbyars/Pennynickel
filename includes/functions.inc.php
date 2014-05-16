<?php
function sanitize($db, $string) {
	return mysqli_real_escape_string($db, trim($string));
}

function getselectvalues($dbc, $value, $name, $table) {
	//takes db handle, keyfield name, description, and tablename as arguments
	$q = "SELECT $value, $name FROM $table";
	$r = mysqli_query($dbc, $q);
	while($row = mysqli_fetch_array($r)) {
		echo "<option value=\"$row[0]\">$row[1]</option>";
	}

}

?>