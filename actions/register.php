<?php
include 'database.php';
$conn = connectDB();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$blood = $_POST['blood'];
$father = $_POST['father'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$mob = $_POST['mob'];
$idno = $_POST['idno'];
$sql = "INSERT INTO registration(fname, lname, gender, dob, blood, father, email, password, mob, idno) VALUES('$fname', '$lname', '$gender', '$dob', '$blood', '$father', '$email', '".md5($pwd)."', '$mob','$idno')";
$result = mysqli_query($conn, $sql);
if ($result) {
	header("Location: ../index.php?registration=done");
} else {
	// echo mysqli_error($conn);
	header("Location: ../index.php?registration=undone");
}
?>