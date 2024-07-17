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
					<!-- containt-->
						<div class="p-3 bg-light">
							<a href="Shop online/index.php" class="text-decoration-none text-dark fs-4">
								<i class="fa-solid fa-less-than"></i>
								Back To Shop	
							</a>
							<div>
								<div id="carouselExampleIndicators" class="carousel slide">
									<div class="carousel-inner mt-4">
										<div class="carousel-item active">
											<img src="Images/product/flowerpot.png" class="d-block w-100">
										</div>
										<div class="carousel-item">
											<img src="Images/product/flowerpot2.png" class="d-block w-100">
										</div>
									</div>
									<div class="carousel-indicators">
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
									</div>
								</div>
								<p class="mt-3">
									Product i'd : 000bvnvm57
								</p>
								<p class="fs-2">
									Product Name Here
								</p>
								<p>
									Quantity
								</p>
								<form>
									<input type="number" class="w-50 p-4 mb-2" value="1"></input>
								</form>
								<button class="btn btn-dark p-3 w-100 mt-3">
									Add To Cart
								</button>
								<p class="text-center me-3 ms-3 mt-4 mb-4">
									I'm a product description. I'm a great place to add more details about your 
									product such as sizing, material, care instructions and cleaning instructions.
								</p>
							</div>
							<!-- info of product-->
							<div class="ms-3 me-3">	
								<h5 class="float-start fs-2">
										Product Info
								</h5>
									<!-- function added-->	
										<p class="float-end">
											<i class="fa-solid fa-plus" onclick="plus()"></i>
										</p>
									<!-- id added-->		
										<br>
										<br>
										<p class="text-center fs-4" id="blockcheck">
											I'm a product detail. I'm a great place to add more information about 
											your product such as sizing, material, care and cleaning instructions. 
											This is also a great space to write what makes this product special and 
											how your customers can benefit from this item.
										</p>
									<hr class="mt-5">
									<!-- next-->
									<div class="mt-4">	
										<h5 class="float-start fs-2">
											Return & Refund Policy
										</h5>
										<p class="float-end">
											<i class="fa-solid fa-plus" onclick="pluss()"></i>
										</p>
										<br>
										<br>
										<div class="fs-4" id="pricebar" style="display:none;">
											<p class="text-center me-3 ms-3 fs-5">
												I’m a Return and Refund policy. I’m a great place to let your 
												customers know what to do in case they are dissatisfied with their 
												purchase. Having a straightforward refund or exchange policy is a 
												great way to build trust and reassure your customers that they can 
												buy with confidence.
											</p>
										</div>
										<hr class="w-100">
									</div>
									<!-- next-->
										<div class="mt-4">	
											<h5 class="float-start fs-2">
												Shipping Info
											</h5>
											<p class="float-end">
												<i class="fa-solid fa-plus" onclick="pluss2()"></i>
											</p>
											<br>
											<br>
											<div class="fs-4" id="color" style="display:none;">
												<p class="text-center me-3 ms-3 fs-5">
													I'm a shipping policy. I'm a great place to add more information
													about your shipping methods, packaging and cost. Providing 
													straightforward information about your shipping policy is a 
													great way to build trust and reassure your customers that they 
													can buy from you with confidence.
												</p>
											</div>
										</div>
											<hr class="w-100">
										
							</div>
									<!--javscript-->
										<script>
											function plus() {
												const blockcheck = document.getElementById('blockcheck');
												blockcheck.style.display = (blockcheck.style.display == "" || blockcheck.style.display == "none") ? "block" : "none";
											}
											function pluss() {
												const pricebar = document.getElementById('pricebar');
												pricebar.style.display = (pricebar.style.display == "none") ? "block" : "none";
											}
											function pluss2() {
												const color = document.getElementById('color');
												color.style.display = (color.style.display == "none") ? "block" : "none";
											}
										</script>
							<!-- links-->
								<div class="mt-4">
									<a href="#" class="text-decoration-none p-2 fs-2 text-dark">
										<i class="fa-brands fa-whatsapp"></i>
									</a>
									<a href="#" class="text-decoration-none p-2 fs-2 text-dark">
										<i class="fa-brands fa-facebook"></i>
									</a>
									<a href="#" class="text-decoration-none p-2 fs-2 text-dark">
										<i class="fa-brands fa-twitter"></i>
									</a>
									<a href="#" class="text-decoration-none p-2 fs-2 text-dark">
										<i class="fa-brands fa-pinterest"></i>
									</a>
								</div>
						</div>
					<!-- Footer-->
						<?php
							footer();
						?>
			</div>
	</body>
</html>