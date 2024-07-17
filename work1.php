	<?php
	include 'database.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if (isset($_POST['update'])) {
			$id = ($_POST['id']);
			$firstname = ($_POST['firstname']);
			$lastname = ($_POST['lastname']);
			$email = ($_POST['email']);
			$password = ($_POST['password']);
			
			$sql = "INSERT INTO `jfy`(`Firstname`, `Lastname`, `Email`, `Password`) VALUES ($firstname,$lastname,$email,$password)";
			
			if (isset($_POST['insert'])) {
			
				$firstname = ($_POST['firstname']);
				$lastname = ($_POST['lastname']);
				$email = ($_POST['email']);
				$password = ($_POST['password']);
			
				if (mysqli_num_rows($result) > 0) {
					echo '<script>alert("Data with this Email already exists"); window.location.href="index.php";</script>';
				} else {
					$insertSql = "INSERT INTO `jfy`(`Firstname`, `Lastname`, `Email`,`Password`) VALUES ('$firstname', '$lastname', '$email','$password')";
				
					if (mysqli_query($conn, $insertSql)) {
						echo '<script>alert("Data inserted successfully"); window.location.href="login.php";</script>';
					} else {
					echo '<script>alert("Error inserting data: ' . mysqli_error($conn) . '")</script>';
					}
				}
			}
		}

	mysqli_close($conn);
	}
	?>