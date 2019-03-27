<?php
session_start();
include '../database.php';
$conn = connectDB();
$email = $_POST['email'];
$password = $_POST['password'];
$check = "SELECT aid FROM admins WHERE email='$email' AND password='".md5($password)."'";
$auth = mysqli_query($conn, $check);
if (mysqli_num_rows($auth) > 0) {
	$sql = "SELECT * FROM admins WHERE email='$email' AND password='".md5($password)."'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['did'] = $row['did'];
		$_SESSION['fname'] = $row['fname'];
		$_SESSION['lname'] = $row['lname'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['mob'] = $row['mob'];
		$_SESSION['photo'] = $row['photo'];
		$_SESSION['log'] = "admin";
		header("Location: ../../admin.php");
	}
} else {
	header("Location: ../../index.php?error=auth");
}
?>