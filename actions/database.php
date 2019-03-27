<?php 
function connectDB() {
	$conn = mysqli_connect("localhost", "root", "", "hms");
	if (!$conn) {
		"<label class='alert alert-danger'>Can&apos;t Connect to Databse</label>". mysqli_connect_error();
	}
	return $conn;
}
?>