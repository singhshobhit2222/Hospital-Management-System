<?php
include '../database.php';
$conn = connectDB();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$photo = "uploads/".$_POST['emp'];
if ($gender == "Male") {
	$photo .= "M";
} else {
	$photo .= "FM";
}
$dob = $_POST['dob'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$mob = $_POST['mob'];
$emp = $_POST['emp'];
$work = @$_POST['work'];
// print_r($work);
$temp = "";
foreach ($work as $day) {
	if ($temp != "") {
		$temp .= ", ";
	}
	$temp .= $day;
}
$work = $temp;
$from = $_POST['from'];
$to = $_POST['to'];
$lunch = @$_POST['lunch'];
$from_a = explode(":", $from);
if ($from_a[0] > 12) {
	$from_a[0] = $from_a[0] - 12;
	$from_a[1] .= " P.M";
} elseif ($from_a[0] < 12 and $from_a[0] > 0) {
	$from_a[1] .= " A.M";
} elseif ($from_a[0] == 12) {
	$from_a[1] .= " P.M";
} else {
	$from_a[0] = "12";
	$from_a[1] .= " A.M";
}
$from = implode(":", $from_a);
$to_a = explode(":", $to);
if ($to_a[0] > 12) {
	$to_a[0] = $to_a[0] - 12;
	$to_a[1] .= " P.M";
} elseif ($to_a[0] < 12 and $to_a[0] > 0) {
	$to_a[1] .= " A.M";
} elseif ($to_a[0] == 12) {
	$to_a[1] .= " P.M";
} else {
	$to_a[0] = "12";
	$to_a[1] .= " A.M";
}
$to = implode(":", $to_a);
$timing = $from." - ";
if ($lunch == "lunch") {
	$timing .= "1:00 P.M and 2:00 P.M - ";
}
$timing .= $to;
$degree = $_POST['degree'];
$salary = $_POST['salary'];
$sql = "INSERT INTO staffs (fname, lname, gender, dob, email, password, mob, photo, emp, work, timing, degree, salary) VALUES('$fname', '$lname', '$gender', '$dob', '$email', '".md5($pwd)."', '$mob', '$photo', '$emp', '$work', '$timing', '$degree', '$salary')";
$result = mysqli_query($conn, $sql);
if ($result) {
	header("Location: ../../index.php?registration=done");
} else {
	echo mysqli_error($conn);
	header("Location: ../../index.php?registration=undone");
}
?>