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
			<link rel="stylesheet" href=" jfy.css">
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
							<div class="text-center">		
								<!-- Story of our jfy-->
									<p class="fs-1 fw-bold mb-1">
										Begin. Explore. Thrive
									</p>
									<p style="font-size:12px;">
										A shopping experience like no other
									</p>
								<!-- para-->
									<p>
										Embarking on our style journey since 2023, 
										Just For You:) has become the epitome of curated fashion excellence.
										Our blog, a treasure trove of style wisdom, unveils the latest trends, 
										showcases timeless pieces, and offers expert advice to elevate your
										wardrobe. Beyond the realm of shopping, we're your trusted companion 
										in the dynamic world of fashion. 
									</p>
									<p>
										Join us as we explore the artistry of apparel, decode the language of 
										trends, and celebrate the essence of personal expression. At Just For 
										You:), it's not just about the clothes; it's about crafting a lifestyle 
										that seamlessly blends sophistication, comfort, and individuality. 
										Dive into our blog, where every post is a step towards transforming 
										the way you perceive and embrace fashion.
									</p>
									<p class="fs-1 mt-5 mb-1">
										THE TEAM
									</p>
									<p>
										Dedicate and Professional
									</p>
									<div class="p-1">
										<div class="bg-1" style="background-image:url('Images/about us/staff1.png');">
											<p class="p-4 w-100 mb-0 text-light fw-bold fs-2">
												Vladimir Putin
											</p>
											<p class="w-100 h-100 text-light fs-5">
												Marketer and Merchantise Buyer
											</p>
										</div>
										<div class="bg-1" style="background-image:url('Images/about us/staff2.png');">
											<p class="p-4 w-100 mb-0 text-light fw-bold fs-2">
												Kim Jon Un
											</p>
											<p class="mb-3 w-100 h-100 text-light fs-5">
												Store Manager
											</p>
										</div>
										<div class="bg-1" style="background-image:url('Images/about us/staff3.png');">
											<p class="p-4 w-100 mb-0 text-light fw-bold fs-2">
												Joe Biden
											</p>
											<p class="mb-3 w-100 h-100 text-light fs-5">
												Customer Service Representative
											</p>
										</div>
									</div>
							</div>
						<!-- Footer-->
						<?php
							footer();
						?>
			</div>
	</body>
</html>