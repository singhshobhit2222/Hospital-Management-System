<div class="container">
	<br>
	<label class="alert alert-success text-center center-block">Welcome to Staff&apos;s Section <b><?php echo $_SESSION['fname']; ?>!</b><span class="close" data-dismiss="alert">&times;</span></label>
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#profile">Profile</a></li>
		<li><a data-toggle="tab" href="#patient">Get Patient Info</a></li>
	</ul>

	<div class="tab-content">
		<div id="profile" class="tab-pane fade in active">
			<h3>Staff&apos;s Details</h3>
			<?php $photo = $_SESSION['photo']; ?>
			<img src="<?php echo $photo; ?>" class="img img-responsive img-circle center-block" height="100px" width="100px">
			<table class="table table-responsive table-bordered table-hover">
				<tr class="warning"><td>First Name</td><td><b><?php echo $_SESSION['fname'];?></b></td></tr>
				<tr class="warning"><td>Last Name</td><td><b><?php echo $_SESSION['lname'];?></b></td></tr>
				<tr class="warning"><td>Gender</td><td><b><?php echo $_SESSION['gender'];?></b></td></tr>
				<tr class="warning"><td>Date of Birth</td><td><b><?php echo $_SESSION['dob'];?></b></td></tr>
				<tr class="warning"><td>Speciality</td><td><b><?php echo $_SESSION['emp'];?></b></td></tr>
				<tr class="warning"><td>Qualification</td><td><b><?php echo $_SESSION['degree'];?></b></td></tr>
				<tr class="warning"><td>Email</td><td><b><?php echo $_SESSION['email'];?></b></td></tr>
				<tr class="warning"><td>Mobile Number</td><td><b><?php echo $_SESSION['mob'];?></b></td></tr>
				<tr class="warning"><td>Working Days</td><td><b><?php echo $_SESSION['work'];?></b></td></tr>
				<tr class="warning"><td>Timing</td><td><b><?php echo $_SESSION['timing'];?></b></td></tr>
				<tr class="warning"><td>Salary (PA)</td><td><b><?php echo $_SESSION['salary'];?></b></td></tr>
			</table>
		</div>
		<div id="patient" class="tab-pane fade">
			<h3>Patient Info</h3>
			<form class="form-horizontal" id="getInfo" method="post">
				<div class="form-group">
					<label class="control-label col-sm-2" for="pid">Patient ID</label>
					<div class="col-sm-10">
						<input type="number" name="pid" class="form-control" required placeholder="Enter Patient ID" id="pid">
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-success center-block" type="submit"><i class="fa fa-fw fa-check"></i> Get Info</button>
				</div>
			</form>
			<div id="getData"></div>
		</div>
	</div>
</div>	