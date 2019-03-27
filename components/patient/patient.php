<div class="container">
	<br>
	<label class="alert alert-success text-center center-block">Welcome to Patient&apos;s Section <b><?php echo $_SESSION['fname']; ?>!</b><span class="close" data-dismiss="alert">&times;</span></label>
	<h3>Patient Details</h3>
	<?php $photo = $_SESSION['photo']; ?>
	<img src="<?php echo $photo; ?>" class="img img-responsive img-circle center-block" height="100px" width="100px">
	<table class="table table-responsive table-bordered table-hover">
		<tr class="warning"><td>Patient ID</td><td><b>JMI<?php echo date("Y").$_SESSION['rid'];?></b></td></tr>
		<tr class="warning"><td>First Name</td><td><b><?php echo $_SESSION['fname'];?></b></td></tr>
		<tr class="warning"><td>Last Name</td><td><b><?php echo $_SESSION['lname'];?></b></td></tr>
		<tr class="warning"><td>Gender</td><td><b><?php echo $_SESSION['gender'];?></b></td></tr>
		<tr class="warning"><td>Date of Birth</td><td><b><?php echo $_SESSION['dob'];?></b></td></tr>
		<tr class="warning"><td>Father&apos;s Name</td><td><b><?php echo $_SESSION['father'];?></b></td></tr>
		<tr class="warning"><td>Blood Group</td><td><b><?php echo $_SESSION['blood'];?></b></td></tr>
		<tr class="warning"><td>Email</td><td><b><?php echo $_SESSION['email'];?></b></td></tr>
		<tr class="warning"><td>Mobile Number</td><td><b><?php echo $_SESSION['mob'];?></b></td></tr>
		<tr class="warning"><td>ID Card Number</td><td><b><?php echo $_SESSION['idno'];?></b></td></tr>
	</table>
	<br>
	<div class="form-group">
		<button class="btn btn-success center-block">View Report</button>
	</div>
</div>	