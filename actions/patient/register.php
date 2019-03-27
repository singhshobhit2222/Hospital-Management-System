<?php
include '../database.php';
$conn = connectDB();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
// if (!isset($_FILES['photo']['name'])) {
// 	$photo = "uploads/Patient";
// 	if ($gender == "Male") {
// 		$photo.= "M";
// 	} else {
// 		$photo.= "FM";
// 	}
// 	$photo .= ".png";
// } else {
	$photo =  "uploads/patients/".$_FILES['photo']['name'];
	move_uploaded_file($_FILES['photo']['tmp_name'], "../../".$photo);
// }
$dob = $_POST['dob'];
$blood = $_POST['blood'];
$father = $_POST['father'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$mob = $_POST['mob'];
$idno = $_POST['idno'];
$sql = "INSERT INTO patients (fname, lname, gender, dob, blood, father, email, password, mob, idno, photo) VALUES('$fname', '$lname', '$gender', '$dob', '$blood', '$father', '$email', '".md5($pwd)."', '$mob','$idno', '$photo')";
$result = mysqli_query($conn, $sql);
if ($result) {
	header("Location: ../../index.php?registration=done");
} else {
	// echo mysqli_error($conn);
	// header("Location: ../../index.php?registration=undone");
}
?>