<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>HMS | Pharmacy </title>
	<?php require "components/head.php"; ?>
</head>
<body>
<?php 
include 'components/header.html';
include 'components/nav.php';
include 'components/pharmacy.html';
include 'components/footer.html';
include 'actions/detecter.php';
?>
</body>
</html>
