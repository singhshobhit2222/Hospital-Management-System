<?php
session_start();
include '../database.php';
$conn = connectDB();
$email = $_POST['email'];
$password = $_POST['password'];
$check = "SELECT did FROM doctors WHERE email='$email' AND password='".md5($password)."'";
$auth = mysqli_query($conn, $check);
if (mysqli_num_rows($auth) > 0) {
	$sql = "SELECT * FROM doctors WHERE email='$email' AND password='".md5($password)."'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['did'] = $row['did'];
		$_SESSION['fname'] = $row['fname'];
		$_SESSION['lname'] = $row['lname'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['dob'] = $row['dob'];
		$_SESSION['spec'] = $row['spec'];
		$_SESSION['degree'] = $row['degree'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['mob'] = $row['mob'];
		$_SESSION['work'] = $row['work'];
		$_SESSION['timing'] = $row['timing'];
		$_SESSION['salary'] = $row['salary'];
		$_SESSION['photo'] = $row['photo'];
		$_SESSION['log'] = "doctor";
		header("Location: ../../doctor.php");
	}
} else {
	header("Location: ../../index.php?error=auth");
}
?>