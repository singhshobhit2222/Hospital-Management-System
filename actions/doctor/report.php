<?php
session_start();
// print_r($_FILES);
$target_dir = "uploads/doctors/report/";
$target_file = $target_dir . basename($_FILES["report"]["name"]);
if (move_uploaded_file($_FILES["report"]["tmp_name"], "../../".$target_file)) {
	include '../database.php';
	$conn = connectDB();
	$sql = "UPDATE doctors SET report='$target_file' WHERE did=".$_SESSION['did'];
	if (mysqli_query($conn, $sql)) {
		header("Location: ../../doctor.php?report=done");
	} else {
		echo mysqli_error($conn);
		// header("Location: ../../doctor.php?report=undone");
	}
} else {
	// echo $target_file;
	// header("Location: ../../doctor.php?report=undone");
}