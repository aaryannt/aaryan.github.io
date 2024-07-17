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
						<div class="bg-light">
							<a href="Home/index.php" class="text-decoration-none text-dark fs-2 p-3">
								HOME
							</a>
							<i class="fa-solid fa-greater-than fs-3"></i>
							<span class="fs-3 ms-3">
								All Product
							</span>
							<p class="text-center mt-2 fw-bold fs-2">
								ALL PRODUCT
							</p>
							<div class="p-3">
								<p class="float-start">
									12 Products
								</p>
								<!-- offcanvas right-->
									<div>	
										<p class="float-end" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
											Filter & Sort
										</p>
										<!-- OFFCANVAS OF FILTER & SORT-->
											<div class="offcanvas offcanvas-end w-100" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
												<div class="offcanvas-header" class="mb-0">
													<h5 class="offcanvas-title" id="offcanvasRightLabel">
														Filter & Sort
															<span>
																(12 product)
															</span>
													</h5>
													<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
												</div>
												<hr >
												<div class="offcanvas-body mt-0">
													<h5 class="float-start">
														Sort by:
													</h5>
													<!-- function added-->	
														<p class="float-end">
															<i class="fa-solid fa-plus" onclick="plus()"></i>
														</p>
													<!-- id added-->		
														<div class="mt-5 fs-3" id="blockcheck" display="">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
																	<label class="form-check-label" for="flexRadioDefault1">
																		Recommended
																	</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
																	<label class="form-check-label" for="flexRadioDefault2">
																		Newest
																	</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
																	<label class="form-check-label" for="flexRadioDefault3">
																		Price (low to high)
																	</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
																	<label class="form-check-label" for="flexRadioDefault4">
																		Price (high to low)
																	</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
																	<label class="form-check-label" for="flexRadioDefault5">
																		Name A-Z
																	</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
																	<label class="form-check-label" for="flexRadioDefault6">
																		Name Z-A
																	</label>
															</div>
														</div>
													<hr class="mt-5">
													<!-- next-->
													<div class="mt-4">	
														<h5 class="float-start">
															Price($7.50 - $130.00)
														</h5>
														<p class="float-end">
															<i class="fa-solid fa-plus" onclick="pluss()"></i>
														</p>
														<div class="fs-3" id="pricebar" style="display:none;">
															<label for="customRange1" class="form-label fs-5">Select Comfortable Price For Shopping</label>
															<input type="range" class="form-range text-dark" id="customRange1" min="7.50" max="130" value="65" step="1">
														</div>
														<hr class="w-100">
													</div>
													<!-- next-->
														<div class="mt-4">	
															<h5 class="float-start w-75 link-underline-dark">
																Color
															</h5>
															<p class="float-end">
																<i class="fa-solid fa-plus" onclick="pluss2()"></i>
															</p>
															<div class="fs-3" id="color" style="display:none;">
																<div>
																	<br>
																	<a href="#" class="text-decorration-none text-dark">
																		<img src="Images/shoponline/black.png" height="30px" height="30px">
																	</a>
																	<a href="#" class="text-decorration-none text-dark">
																		<img src="Images/shoponline/purple.png" height="30px" height="30px">
																	</a>
																	<a href="#" class="text-decorration-none text-dark">
																		<img src="Images/shoponline/white.png" height="30px" height="30px">
																	</a>
																</div>
															</div>
														</div>
															<hr class="w-100">
														<!-- next-->
															<div class="mt-4">	
																<h5 class="float-start w-75 link-underline-dark">
																	Size
																</h5>
																<p class="float-end">
																	<i class="fa-solid fa-plus" onclick="pluss3()"></i>
																</p>
																<br>
																<div class="fs-3" id="check" style="display:none;">
																	<br>
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
																		<label class="form-check-label" for="flexCheckChecked">
																			All
																		</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
																		<label class="form-check-label" for="flexCheckDefault1">
																			250 ml
																		</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
																		<label class="form-check-label" for="flexCheckDefault2">
																			500 ml
																		</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
																		<label class="form-check-label" for="flexCheckDefault3">
																			800 ml
																		</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
																		<label class="form-check-label" for="flexCheckDefault4">
																			Small
																		</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
																		<label class="form-check-label" for="flexCheckDefault5">
																			Medium
																		</label>
																	</div>
																	<div class="form-check">
																		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
																		<label class="form-check-label" for="flexCheckDefault6">
																			Large
																		</label>
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
															function pluss3() {
																const check = document.getElementById('check');
																check.style.display = (check.style.display == "none") ? "block" : "none";
															}
														</script>
												</div>
											</div>	
										<!-- end of canvas-->
									</div>
								<!-- product-->
									<div>
										<a href="Product.php" class="text-decoration-none text-dark">
											<img src="Images/bookonline/planti.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/bag.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/drop.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/sweat.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/glass.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/chair.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/cleaner.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/cap.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/bottle.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/pillow.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">
											<img src="Images/bookonline/earing.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>	
									</div>
									<div>
										<a href="#" class="text-decoration-none text-dark">	
											<img src="Images/bookonline/shirt.png" class="w-100 h-100">
											<p class="mt-2 mb-0 fs-5">
												Product Name
											</p>
											<p class="fs-5">
												$100
											</p>
										</a>	
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