<?php 
session_start(); 
if (isset($_SESSION['log']) and $_SESSION['log'] == "staff") {
?>
<!DOCTYPE html>
<html>
<head>
	<title>HMS | Staff </title>
	<?php require "components/head.php"; ?>
</head>
<body>
<?php 
include 'components/header.html';
include 'components/nav.php';
include 'components/staff/staff.php';
include 'components/footer.html';
include 'actions/detecter.php';
?>
</body>
</html>
<?php
} else {
	header("Location: index.php");
}
?>