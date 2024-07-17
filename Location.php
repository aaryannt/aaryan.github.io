<!DOCTYPE html>
<html>
	<!-- Contact .................page................... jfy ...........................-->
	<head>
		<!-- Logo Head-->
			<link rel="icon" href ="Images/logoo.png">
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
			crossorigin="anonymous"></script>
		<!-- Fa Fa icon-->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
		<!-- style tag -->
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
					
					<!-- back to top-->
						<button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top">
							<a href="#" class="text-light">	
								<i class="fa fa-arrow-up">
								
								</i>
							</a>
						</button>
						<br>
					<!-- logo-->
						<div class="text-center">
							<img src="Images/ljfy.png" class="w-25 h-25">
							<p class="fs-2 fw-bold">
								Store Location
							</p>
							<p class="">
								Come Visit
							</p>
							<div>
								<hr class="ms-4 me-4"> 	
									<p class="fs-5">
										<span class="fw-bold fs-3"> Location 1 </span> 
										<br>Opposite Amity Col. <br>
										FC Rd. Pune , <br> 411001 Maharashtra
									</p>
									<button class="btn btn-dark mb-0">
										<a href="#" class="text-decoration-none text-light">
											Direction
										</a>
									</button>
								<hr class="ms-4 me-4">	
									<p class="fs-5">
										<span class="fw-bold fs-3"> Location 2 </span> 
										<br>Opposite Amity Col. <br>
										FC Rd. Pune , <br> 411001 Maharashtra
									</p>
									<button class="btn btn-dark mb-0">
										<a href="#" class="text-decoration-none text-light">
											Direction
										</a>
									</button>
								<hr class="ms-4 me-4">	
									<p class="fs-5">
										<span class="fw-bold fs-3"> Location 3 </span> 
										<br>Opposite Amity Col. <br>
										FC Rd. Pune , <br> 411001 Maharashtra
									</p>
									<button class="btn btn-dark mb-0">
										<a href="#" class="text-decoration-none text-light">
											Direction
										</a>
									</button>
								<hr class="ms-4 me-4">
							</div>
						</div>
						<!-- Footer-->
						<?php
							footer();
						?>
			</div>
	</body>
</html>