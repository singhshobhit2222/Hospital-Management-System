<div class="container">
	<br>
	<label class="alert alert-success text-center center-block">Welcome to Doctor&apos;s Section <b><?php echo $_SESSION['fname']; ?>!</b><span class="close" data-dismiss="alert">&times;</span></label>
	<h3>Doctor&apos;s Details</h3>
	<?php $photo = $_SESSION['photo']; ?>
	<img src="<?php echo $photo; ?>" class="img img-responsive img-circle center-block" height="100px" width="100px">
	<table class="table table-responsive table-bordered table-hover">
		<tr class="warning"><td>First Name</td><td><b><?php echo $_SESSION['fname'];?></b></td></tr>
		<tr class="warning"><td>Last Name</td><td><b><?php echo $_SESSION['lname'];?></b></td></tr>
		<tr class="warning"><td>Gender</td><td><b><?php echo $_SESSION['gender'];?></b></td></tr>
		<tr class="warning"><td>Date of Birth</td><td><b><?php echo $_SESSION['dob'];?></b></td></tr>
		<tr class="warning"><td>Speciality</td><td><b><?php echo $_SESSION['spec'];?></b></td></tr>
		<tr class="warning"><td>Qualification</td><td><b><?php echo $_SESSION['degree'];?></b></td></tr>
		<tr class="warning"><td>Email</td><td><b><?php echo $_SESSION['email'];?></b></td></tr>
		<tr class="warning"><td>Mobile Number</td><td><b><?php echo $_SESSION['mob'];?></b></td></tr>
		<tr class="warning"><td>Working Days</td><td><b><?php echo $_SESSION['work'];?></b></td></tr>
		<tr class="warning"><td>Timing</td><td><b><?php echo $_SESSION['timing'];?></b></td></tr>
		<tr class="warning"><td>Salary (PA)</td><td><b><?php echo $_SESSION['salary'];?></b></td></tr>
	</table>
	<br>
	<form action="actions/doctor/report.php" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
		<div class="form-group">
			<label for="report" class="control-label col-sm-4">Add Report</label>
			<div class="col-sm-4">
				<input type="file" name="report" id="report" accept="image/*, application/pdf, application/vnd.ms-word">
			</div>
			<div class="col-sm-4">
				<button class="btn btn-success" type="submit">Submit</button>
			</div>
		</div>
	</form>
</div>	