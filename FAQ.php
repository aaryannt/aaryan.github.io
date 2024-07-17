<!DOCTYPE html>
<html>
	<!-- Home .................page................... jfy ...........................-->
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
					<!-- Title -->
						<div id="#">
							<p class="text-center fs-1">
								HELP CENTER
							</p>
						</div>
						<div>
							<p class="text-center fw-bold">
								Your Questions, Our Solutions :)
							</p>
						</div>
					<!-- para of faq-->
						<div>
							<p class="text-center">
								Discover instant solutions to your questions in our FAQ section. 
								From product queries to account assistance, find concise information 
								for a hassle-free experience. Can't find what you need? Contact our 
								support team for personalized help. At [Just For You :)], clarity and 
								convenience are our top priorities.
							</p>
						</div>
					<!-- faq image return-->
						<div>
							<img src="Images/FAQI/returninward.png" class="w-100">
							<p class="fs-5 text-center">
								Do You Offer Same Day Delivery ?
							</p>
							<p class="text-center">
								"Get what you need, when you need it. Our Same Day Delivery ensures 
								swift service for your orders. Experience convenience at its best – 
								order today, enjoy it today."
							</p>
						</div>
					<!-- payment method-->
						<div>
							<img src="Images/FAQI/paymentmethod.png" class="w-100">
							<p class="text-center fs-5 mt-1 fw-bold">
								What Payment Do You Accept ?
							</p>
							<p class="text-center">
								Pay your way effortlessly! Credit cards, debit cards, digital wallets 
								– we accept them all for a seamless checkout experience. At 
								Just For You:), your convenience is our priority. Shop, pay, 
								and enjoy in just a few clicks.
							</p>
						</div>
					<!-- Help -->
						<div>
							<img src="Images/FAQI/help.png" class="w-100">
							<p class="fs-4 text-center mt-1">
								CONTACT SUPPORT
							</p>
							<p class="text-center fw-bold">
								How Can We Help?
							</p>
						</div>
					<!-- input for help-->
						<div>
							<form class="text-center me-3 ms-3">
								<input type="text" class="w-100 p-4 mb-2" placeholder="First Name"></input>
								<input type="text" class="w-100 p-4 mb-2" placeholder="Last Name"></input>
								<input type="email" class="w-100 p-4 mb-2" placeholder="Email"></input>
								<input type="number" class="w-100 p-4 mb-2" placeholder="Phone No."></input>
							</form>
							<!-- dropdown for an issue-->
								<div class="dropdown text-center me-3 ms-3">
									<select class="form-select mb-2 w-100 p-4" aria-label="Default select example">
										<option selected>Choose An Issue</option>
										<option value="1">Logging Into Account</option>
										<option value="2">Completing Payment</option>
										<option value="3">Viewing Content</option>
										<option value="4">Uploading Files</option>
										<option value="5">Other's</option>
									</select>
									<div class="form-group">
										<div class="col-lg-10 mb-3">    
											<textarea name="user-message" id="user-message" cols="20"  rows="10" class="form-control" placeholder="Let Know What You Need Help With..."></textarea>
										</div>
									</div>
									<button type="button" class="w-75 btn btn-dark fw-bold">Submit You'r Need</button>
								</div>
						</div>
					<!-- Footer-->
						
						<?php
							footer();
						?>
			</div>
	</body>
</html>