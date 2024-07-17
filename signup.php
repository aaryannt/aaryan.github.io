<!DOCTYPE html>
<html>
	<!-- Home .................page................... jfy ...........................-->
	<head>
		<!-- Logo Head-->
			<link rel="icon" href ="Images/Ljfy.png">		
		<!-- Title Name-->	
			<title>Just For You :)</title>
		<!-- Meta -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">  
		<!-- Bootstrap CSS -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel=
			"stylesheet" integrity=
			"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin=
			"anonymous">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
				integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
				crossorigin="anonymous">
			</script>
		<!-- Fa Fa icon-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
		<!-- css -->
			<link rel="stylesheet" href="jfy.css">
	</head>
	
	<body>
		<!-- Main Div-->
			<div class="w-100 p-2 mb-3">
				<!-- navbar -->
					<?php
						require_once('navbar.php');
							navbar();
					?>
				<div>
					<!--Heading-->
					<div>
						<p class="mt-3 fs-2 fw-bold">
							Sign Up
						</p>
					</div>
					<div>
						<form class="me-2 ms-2" method="POST" action="work1.php">
							<span class="fs-5">Name</span>
								<input type="text" class="w-100 mb-4"></input>
							<span class="fs-5">Surname</span>
								<input type="text" class="w-100 mb-4"></input>
							<span class="fs-5">Email</span>
								<input type="email" class="w-100 mb-4"></input>
							<span class="fs-5">Password</span>
								<input type="password" class="w-100 mb-4"></input>
							<input type="submit" name="insert" class="btn btn-dark w-100" value="create">
						</form>
					</div>
				</div>
				<!-- Footer-->
						
						<?php
							footer();
						?>
			</div>
	</body>
	
</html>