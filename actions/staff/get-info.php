<?php 
include '../database.php';
$conn = connectDB();
$pid = $_POST['pid'];
$sql = "SELECT * FROM patients WHERE rid=$pid";
$res = mysqli_query($conn, $sql);
if ($res) {
	$row = mysqli_fetch_assoc($res);
	$str = "{";
	$str .= '"fname": "'.$row['fname'].'", ';
	$str .= '"lname": "'.$row['lname'].'", ';
	$str .= '"gender": "'.$row['gender'].'", ';
	$str .= '"dob": "'.$row['dob'].'", ';
	$str .= '"father": "'.$row['father'].'", ';
	$str .= '"blood": "'.$row['blood'].'", ';
	$str .= '"email": "'.$row['email'].'", ';
	$str .= '"mob": "'.$row['mob'].'", ';
	$str .= '"idno": "'.$row['idno'].'", ';
	$str .= '"photo": "'.$row['photo'].'"}';
	echo $str;
} else {
	echo mysqli_error($conn);
}
?>