<?php
	echo '<script type="text/javascript">
	$(document).ready(function() {';

	if (isset($_GET['registration']) and $_GET['registration'] == "done") {
		echo 'snackbar("User is registered Successfully!")';
	}
	if (isset($_GET['error']) and $_GET['error'] == "auth") {
		echo 'snackbar("Invalid email or password. Try Again.")';
	}
	if (isset($_GET['report']) and $_GET['report'] == "done") {
		echo 'snackbar("Report Added Successfully!")';
	}
	if (isset($_GET['report']) and $_GET['report'] == "undone") {
		echo 'snackbar("Report Not Added! Try Again")';
	}
	if (isset($_GET['prescribe']) and $_GET['prescribe'] == "done") {
		echo 'snackbar("Prescription Added Successfully!")';
	}
	if (isset($_GET['prescribe']) and $_GET['prescribe'] == "undone") {
		echo 'snackbar("Prescription Not Added! Try Again")';
	}
	if (isset($_GET['test']) and $_GET['test'] == "done") {
		echo 'snackbar("Test Report Added Successfully!")';
	}
	if (isset($_GET['test']) and $_GET['test'] == "undone") {
		echo 'snackbar("Test Report Not Added! Try Again")';
	}
	echo '});
	</script>';
?>