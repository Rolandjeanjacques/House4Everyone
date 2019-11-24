<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>House For Everyone App</title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="jquery.datetimepicker.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel = "stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src= "jquery.datetimepicker.full.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/und/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
				 <a class = "nav-link" href = "home.php#home">Home</a>
			 </li>
			 <li class = "nav-item">
					<a class = "nav-link" href = "home.php#bookings">Registration</a>
			</li>
			<li class = "nav-item">
						<a class = "nav-link" href = "home.php#features">Feedback</a>
					</li>
					<li class = "nav-item">
							<a class = "nav-link" href = "home.php#resources">News</a>
						</li>
						<li class = "nav-item">
								<a class = "nav-link" href = "home.php#clients">Clients</a>
							</li>
							<li class = "nav-item">
									<a class = "nav-link" href = "home.php#contacts">Contacts</a>
								</li>
		 </ul>
	 </div>
</nav>
	<!--- Start Navigation -->

	<!--- End Navigation -->

<!--- Start Booking Section -->
<div id = "bookings"  class = "offset">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        body {
			margin: 0;
			padding: 0;
		}
		.header{
			height: 100vh;
			background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(img/house.jpg);
			background-size: cover;
			background-position: center;
			display: flex;
			justify-content: center;
			align-items: center;
			font-family: sans-serif;
		}
		h1{
			text-align: center;
			color: #fff;
			margin-bottom: 70px;
			font-size: 45px;
			letter-spacing: 2px;
		}
		span {
			color: #219882;
		}
		.search-field {
			height: 50px;
			padding: 10px;
		}
		.skills {
			width: 200px;
		}
		.location{
			width: 400px;
		}
		.search-btn {
			height: 50px;
			width: 150px;
			background: #219882;
			border: none;
			color: #fff;
		}
		.search-btn:hover {
			background: #1ebba3;
			cursor: pointer;
		}
		.form-box {
			background: rgba(0, 0, 0, 0.6);
			padding: 30px 50px;
		}
    </style>
		<div class="header">
			<form>
				<h1>Your perfect <span>house</span> one click <span>away</span></h1>
				<div class="form-box">
					<input class="search-field location" name="location" type="text"
						placeholder="Where would you like to locate at?">
						<input class="search-field skills" name="search" type="text"
						placeholder="House Type">
						<input class="search-field budget" name="budget" type="text"
						placeholder="What is your budget?">
						<button class="search-btn" type="button">Search</button>
				</div>
			</form>
		</div>
    </div>
    
<!--- End Booking Section-->

<!--- Start Contacts Section -->

<!--- End Contacts Section-->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

<!--- End of Script Source Files -->

</body>
</html>