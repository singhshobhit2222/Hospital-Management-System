<?php
include 'database.php';
$conn = connectDB();
$pid = $_POST['pid'];
$med = $_POST['med'];
$dis = $_POST['dis'];
$sql = "INSERT INTO prescriptions(pid, disease, medicine) VALUES ($pid, '$dis', '$med')";
if (mysqli_query($conn, $sql)) {
	header("Location: ../pharmacy.php?prescribe=done");
} else {
	header("Location: ../pharmacy.php?prescribe=undone");
}
?>