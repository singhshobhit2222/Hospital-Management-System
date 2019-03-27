<div class="container">
	<h3>Doctor&apos;s Detail</h3>
	<table class="table table-striped table-bordered table-hover table-responsive">
		<thead>
			<tr class="success">
				<th>Doctor&apos;s Name</th>
				<th>Availiblity Days</th>
				<th>Timing</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include 'actions/database.php';
				$conn = connectDB();
				if (isset($_GET['type'])) {
					$sql = "SELECT fname, lname, work, timing FROM doctors WHERE spec='".$_GET['type']."';";
				} else {
					$sql = "SELECT fname, lname, work, timing FROM doctors;";
				}
				$result = mysqli_query($conn, $sql);
				if ($result) {
					$num = mysqli_num_rows($result);
					if ($num > 0) {
						for ($i = 0; $i < $num; $i++) {
							$row = mysqli_fetch_assoc($result);
							echo "<tr class='warning'>
								<td>".$row['fname']." ".$row['lname']."</td>
								<td>".$row['work']."</td>
								<td>".$row['timing']."</td>
							</tr>";
						}
					} else {
						echo "<tr><td class='text-center' colspan='3'>No Doctors Available right now.</td></tr>";
					}
				} else {
					echo "<tr><td class='text-center' colspan='3'>Query Not Exceuted ".mysqli_error($conn)."</td></tr>";
				}
			?>
		</tbody>
	</table>
</div>	
