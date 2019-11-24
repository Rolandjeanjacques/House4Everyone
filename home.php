<?php
    session_start();
    if(!isset($_SESSION['userlogin'])){
        header("Location: login.php");
    }
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION);
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>House For Everyone App</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy = "scroll" data-target = "#navbarResponsive">

<!--- Start Home Section -->
<div id = "home">
<nav class = "navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	 <a class = "navbar-brand" href = "#"><img src = "img/nunn.png" height="120%" width="100%"></a>
	 <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarResponsive">
		<span class = "navbar-toggler-icon"></span>
	 </button>
	 <div class = "collapse navbar-collapse" id = "navbarResponsive">
		 <ul class = "navbar-nav ml-auto">
			 <li class = "nav-item">
				 <a class = "nav-link" href = "#home">Home</a>
			 </li>
			 
			<li class = "nav-item">
						<a class = "nav-link" href = "#features">Feedback</a>
					</li>
					<li class = "nav-item">
							<a class = "nav-link" href = "#resources">News</a>
						</li>
						<li class = "nav-item">
								<a class = "nav-link" href = "#clients">Clients</a>
							</li>
							<li class = "nav-item">
									<a class = "nav-link" href = "#contacts">Contacts</a>
                                </li>
                                <li class ="nav-item">
                                <a class="nav-link" href = "home.php?logout=true">Logout</a>
                                </li>
		 </ul>
	 </div>
</nav>
	<!--- Start Navigation -->

	<!--- End Navigation -->

<!--- Start Landing Page Section -->
<div class = "landing">
	<div class = "home-wrap">
		<div class = "home-inner">
		</div>
	</div>
</div>
<div class = "caption text-center">
	<h1>Welcome to <span>House</span> 4 <span>Everyone</span></h1>
	<h3>ONLINE TOOL FOR HOUSE SEARCHING</h3>
	<a class = "btn btn-outline-light btn-lg" href = "searchfilter.php">Get Started</a>
</div>
<!--- End Landing Page Section -->
</div>
<!--- End Home Section-->

<!--- Start Booking Section -->
<!--- End Booking Section-->

<!--- Start Features Section -->
<div id = "features"  class = "offset">
	<!--- Start Jumbotron -->
	<div class="jumbotron text-center">
		<div class="narrow">
			<div class="col-12">
				<h3 class="heading">Feedback</h3>
				<div class="heading-underline"></div>
			</div>
			<div class="row text-center">
				<div class="col-md-4">
					<div class="feature">
						<i class="fa fa-star-half fa-4x" data-fa-transform="shrink-3 up-5"></i>
						<h3>Rating Section</h3>
						<p>It allows users to access comments from clients in form of videos.</p>
					</div>
				</div>
				<div class="col-md-4">
						<div class="feature">
							<i class="fa fa-comments fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
							<h3>Comment Section</h3>
							<p>It allows users to access comments from clients in form of texts.</p>
						</div>
					</div>
					<div class="col-md-4">
							<div class="feature">
								<i class="fab fa-wpforms fa-4x" data-fa-transform="shrink-4 up-5"></i>
								<h3>Contact Form</h3>
								<p>It will display useful information concerning our agency. Feel free to contact us anytime!</p>
							</div>
						</div>
			</div><!---End Row-->
		</div><!---End Narrow-->
	</div><!--- Start Jumbotron -->
	</div>
<!--- End Features Section-->

<!--- Start Resources Section -->
<div id = "resources"  class = "offset">
	<div class="fixed-background">
		<div class="row dark text-center">
				<div class="col-12">
						<h3 class="heading">News</h3>
						<div class="heading-underline"></div>
					</div>
					<div class="col-md-4">
						<h3>VIDEOS</h3>
							<div class="resources">
								<i class="fas fa-film fa-3x"></i>
								<p>It contains videos giving <br>information on apartments</p>
							</div>
						</div>
						<div class="col-md-4">
								<h3>PHOTOS</h3>
									<div class="resources">
										<i class="fas fa-camera fa-3x"></i>
										<p>It contains photos giving <br>information on apartments</p>
									</div>
								</div>
								<div class="col-md-4">
										<h3>NEWS</h3>
											<div class="resources">
												<i class="fab fa-hacker-news fa-3x"></i>
												<p>It contains daily information <br>on events and happenings <br>around the apartments areas</p>
											</div>
										</div>
		</div><!--- End Row Dark-->
		<div class = "fixed-wrap">
				<div class = "fixed">
				</div>
			</div>
	</div><!--- End Fixed Background-->
	</div>
<!--- End Resources Section-->

<!--- Start Clients Section -->
<div id = "clients"  class = "offset">
	<!--- Start Jumbotron -->
	<div class="jumbotron">
			<div class="col-12 text-center">
					<h3 class="heading">Clients</h3>
					<div class="heading-underline"></div>
				</div>
				<div class="row">
					<div class="col-md-6 clients">
						<div class="row">
							<div class="col-md-4">
								<img src="img/client1.png">
							</div>
							<div class="col-md-8">
								<blockquote>
									<i class="fas fa-quote-left"></i>
									I see H4EO support as more of a partner to my company than a resource. I can pick up the phone and talk to anyone at any time and the way that they interact with us as a business makes it really simple.
									<hr class="clients-hr">
									<cite>&#8212; Eric, Small Business Owner</cite>
								</blockquote>
							</div>
					</div>
					
					</div>
					<div class="col-md-6 clients">
						<div class="row">
							<div class="col-md-4">
								<img src="img/client2.png">
							</div>
							<div class="col-md-8">
								<blockquote>
									<i class="fas fa-quote-left"></i>
									I see H4EO support as more of a partner to my company than a resource. I can pick up the phone and talk to anyone at any time and the way that they interact with us as a business makes it really simple.
									<hr class="clients-hr">
									<cite>&#8212; Rachel, Professional Photographer</cite>
								</blockquote>
							</div>
						</div>
					</div>
					
				</div><!--- End Row -->
	</div><!--- End Jumbotron -->
	<div class="col-12 narrow text-center">
		<p class="lead">Want to learn more about H4EO?</p>
		<a class = "btn btn-secondary btn-md" href = "home.php#contacts">Learn More</a>
	</div>
	</div>
<!--- End Clients Section-->

<!--- Start Contacts Section -->
<div id = "contacts"  class = "offset">
	<footer>
		<div class="row justify-content-center">
			<div class="col-mid-5 text-center">
				<img src="img/nunn.png">
				<p>At our core is a collection of features and services <br>that represent everything your business needs to compete in <br>the modern marketplace.</p>
				<strong>Contact Info</strong>
				<p>(254) 791 683 798<br>email@h4eo.com</p>
				<a href="" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a href="" target="_blank"><i class="fab fa-twitter-square"></i></a>
				<a href="" target="_blank"><i class="fab fa-instagram"></i></a>
			</div>
			<hr class="socket">
			&copy; H4EO App.
		</div>
	</footer>
	</div>
<!--- End Contacts Section-->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>