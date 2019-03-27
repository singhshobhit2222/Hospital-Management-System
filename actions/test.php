<?php
include 'database.php';
$conn = connectDB();
$pid = $_POST['pid'];
$test = $_POST['test'];
$sql = "INSERT INTO lab (pid, test) VALUES ($pid, '";
$te = "";
foreach ($test as $t) {
	if ($te != "") {
		$te .= ", ";
	}
	$te .= $t;
}
$sql .= $te;
$sql.="')";
if (mysqli_query($conn, $sql)) {
	$tid = mysqli_insert_id($conn);
	$error = false;
	// print_r($_FILES6);
	$target_dir = "uploads/doctors/report/";
	$total = count($_FILES['report']['name']);
	for ($i=0; $i < $total; $i++) { 
		$target_files[$i] = $target_dir.basename($_FILES["report"]["name"][$i]);
		// $target_files[$i] = filter_var($target_files[$i], FILTER_SANITIZE_URL);
		// $target_files[$i] = str_replace("'", "_", $target_files[$i]);
		// echo $target_files[$i];
	}
	for ($i=0; $i < $total; $i++) { 
		if (move_uploaded_file($_FILES["report"]["tmp_name"][$i], "../".$target_files[$i])) {
            $sql_image = "INSERT INTO reports(tid, src) VALUES($tid, '".$target_files[$i]."')";
			if (!mysqli_query($conn, $sql_image)) {
				echo $target_files[$i];
				echo mysqli_error($conn);
				$error = true;
				// exit;
				// header("Location: ../../index.php?sell=error&type=query");
			}
		} else {
			echo "File $i Error: ".$target_files[$i];
			$error = true;
			// exit;
			// header("Location: ../../index.php?upload=error&image=multi");
		}
	}
	if (!$error) {
		header("Location: ../laboratory.php?test=done");
	} else {
		header("Location: ../laboratory.php?test=undone");
	}
} else {
	echo mysqli_error($conn);
	header("Location: ../laboratory.php?test=undone");
}
?>