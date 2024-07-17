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
					
					<!-- back to top-->
						<button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top">
							<a href="#" class="text-light">	
								<i class="fa fa-arrow-up">
								
								</i>
							</a>
						</button>
						<br>
					<!-- Name of comp. -->
						<div class="text-center mb-0"id="#">		
							<p class="fs-1">
								NEW ARRIVALS ARE HERE
							</p>
						</div>
					<!-- title -->
						<div class="text-center fw-bold">
							<p>
								Limited time price drop!
							</p>
						</div>
					<!-- Home Image-->
						<div>
							<img src="Images/HomeI/homeimage.png" class="w-100">
						</div>
					<!-- Know us-->
						<div class="mt-4 text-center">
							<p class="fs-5">
								Outline of our company story
							</p>
							<p class="fw-bold">
								Best In Bussiness
							</p>
							<p>
								Our Online Store was founded by a XYZ dedicated to innovative and sustainable
								New products that stand the test of Present time. With our exceptional 
								service and attention to Customer, we guarantee that your shopping 
								experience will be seamless from start to finish. Take a look at our 
								site to learn more about our brand and quality standards.
							</p>
						</div>
					<!-- jewelry -->
						<div>
							<img src="Images/HomeI/homeimagej.png" class="w-100">
						</div>
					<!-- defective product and money return-->
						<div>
							<p class="fs-4 text-center mt-4 w-100">
								Ensuring Safe and Speedy Money Returns
							</p>
							<p class="text-center">	
								Experience peace of mind with our rapid and secure money return service.
								Utilizing advanced technology and efficient processes, we prioritize the 
								safety of your funds. Count on us for the fastest and hassle-free returns,
								ensuring your financial transactions are both swift and secure.
							</p>
						</div>
					<!-- Footer-->
						
						<?php
							footer();
						?>
			</div>
	</body>
</html>