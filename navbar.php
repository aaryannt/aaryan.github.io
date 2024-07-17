<?php
	function navbar(){
		echo'				
				<!-- logo image -->
					<div class="mb-5">
						<img src="Images/jfyl.png" class="float-start mb-3" height="50px" width="80px">
						<!-- off canvas dropdown-->
							<div class="dropdown float-end mb-3">
								<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img src="Images/userimage.png" class="" height="38px" width="38px">
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="Login.php">
										LogIn
									</a>
									<a class="dropdown-item" href="#">
										My Orders
									</a>
									<a class="dropdown-item" href="#">
										My Address
									</a>
									<a class="dropdown-item" href="#">
										My Wallet
									</a>
									<a class="dropdown-item" href="#">
										My Subscription
									</a>
									<a class="dropdown-item" href="#">
										My Account
									</a>
								</div>
							</div>
					</div>
					<!-- main div search and bar-->	
						<div class="w-100">	
							<!-- search bar-->
									<div class="float-start w-75">	
										<form action="">
											<div class="input-group border rounded-pill p-1">
												<input type="search" placeholder="Search....." aria-describedby="button-addon3" class="border-0 form-control" style="background-color:#F0F0F0;">
													<div class="input-group-append border-0">
														<button id="button-addon3" type="button" class="btn">
															<a href="#!" class="text-dark">	
																<i class="fa-solid fa-magnifying-glass">
																
																</i>
															</a>
														</button>
													</div>
											</div>
										</form>
									</div>
							<!-- three bar-->
								<div class="w-25 d-inline-block text-center mt-1 fs-1">
									<a href="#!" class="text-dark">
										<i class="fa-solid fa-bars fs-1" aria-hidden="true" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>
									</a>
								</div>
						</div>
					<!-- offcanvas of three bar-->
							<div class="offcanvas offcanvas-top h-100" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-color:#F0F0F0;">
								<div class="offcanvas-header">
									<h5 class="offcanvas-title" id="offcanvasExampleLabel">
										Menu
									</h5>
									<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
									</button>
								</div>
								<!-- offcanvas body-->	
								<div class="offcanvas-body text-center">
										<!-- off canvas inter name-->
										<div class="row">
											<a href="index.php" class="mb-4 text-dark text-decoration-none">
												Home
											</a>
											<a href="Shop Online.php" class="mb-4 text-dark text-decoration-none">
												Shop Online
											</a>
											<a href="FAQ.php" class="mb-4 text-dark text-decoration-none">
												FAQ
											</a>
											<a href="Contactus.php" class="mb-4 text-dark text-decoration-none">
												Contact
											</a>
											<a href="Aboutus.php" class="mb-4 text-dark text-decoration-none">
												About Us
											</a>
											<a href="Location.php" class="mb-4 text-dark text-decoration-none">
												Location
											</a>
										</div>
								</div>
							</div>
						';
	}
					
		function footer(){
		echo '
				<!-- footer name-->
					<p class="fs-2 text-center mt-5 mb-0 fw-bold">
						JUST FOR YOU:)
					</p>
				<!-- footer-->
				<div class="">
					<footer class="text-center text-lg-start text-muted">
						<section>
							<div class="text-center">
								<a href="#" class="me-3 text-decoration-none text-reset">
									<i class="fa-brands fa-facebook mt-3"></i>
								</a>
								<a href="#" class="me-3 text-decoration-none text-reset">
									<i class="fa-brands fa-twitter"></i>
								</a>
								<a href="#" class="me-3 text-decoration-none text-reset">
									<i class="fa-brands fa-google"></i>
								</a>
								<a href="#" class="me-3 text-decoration-none text-reset">
									<i class="fa-brands fa-instagram"></i>
								</a>
								<a href="#" class="me-3 text-decoration-none text-reset">
									<i class="fa-brands fa-github"></i>
								</a>
							</div>
										<!-- Grid column -->
									<hr class="me-2 ms-2">
									<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-2">
										<!-- Links -->
										<p>
											<i class="fa-solid fa-house me-3"></i>
											Gulmandi , CH.Sambhajinagar , 431001 
										</p>
										<p>
											<i class="fa-solid fa-house me-3"></i>
											JFY@gmail.com
										</p>
										<p>
											<i class="fa-solid fa-phone me-3"></i> 
												+91 123 456 7890
										</p>
										<p>
											<i class="fa-solid fa-print me-3"></i>
												+91 987 654 3210
										</p>
									</div>
									<!-- Grid column -->
								</div>
								<!-- Grid row -->
							</div>
						</section>
					
							<!-- Copyright -->
						<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
							© 2023 Copyright:
						</div>
					</footer>
				</div>
			';
	}
?>