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
					<!-- Background Color-->
						<div class="text-center">
							<!-- NAME -->
								<div class="">
									<p class="fs-3">
										CONTACT US
									<p/>
									<p>
										Opposite Biggest Hindu
										Temple, New Jersy, United State Of america
										
										<p>JFY@gmail.com</p>
										<p>+1 (2345)678 910</p>
									</p>
								</div>
								<img src="Images/contactus/contactus.png" class="w-100 h-100 mb-5">
								<p class="fs-3 mt-2 mb-3">
									OPENING HOURS
								</p>
								<p class="mb-3">
									Visit Us
								</p>
								<p class="mb-0">
									Monday - Friday
								</p>
								<p>
									9.00AM - 8.00PM
								</p>
								<p class="mb-0">
									Saturday - Sunday
								</p>
								<p class="mb-5">
									11.00AM - 6.00PM
								</p>
						</div>
							<!-- Footer-->
								<?php
									footer();
								?>
			</div>
	</body>
</html>