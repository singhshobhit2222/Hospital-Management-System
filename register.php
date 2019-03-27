<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>HMS | Registration </title>
	<?php require "components/head.php"; ?>
</head>
<body>
<?php 
include 'components/header.html';
include 'components/nav.php';
include 'components/modals/patient.html';
include 'components/modals/doctor.html';
include 'components/modals/staff.html';
include 'components/modals/admin.html';
if (isset($_GET['type'])) {
	if ($_GET['type'] == "pat") {
		include 'components/patient/register.html';
	} elseif ($_GET['type'] == "doc") {
		include 'components/doctor/register.html';
	} elseif ($_GET['type'] == "stf") {
		include 'components/staff/register.html';
	} elseif ($_GET['type'] == "adm") {
		include 'components/admin/register.html';
	}
}
include 'components/footer.html';
include 'actions/detecter.php';
?>
</body>
</html>