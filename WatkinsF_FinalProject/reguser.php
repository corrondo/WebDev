<!DOCTYPE html>
<html lang="en">
<!--***********************************************************
* Federico Watkins  |  Web Program. and Design  |  12/09/2015 *
* User-Report page: Displays registered users                 *
************************************************************-->
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Redwood State &amp; National Park</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/modern-business.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Redwood State &amp; National Park</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">                    
						<li>
							<a href="activities.html">Activities</a>
						</li>                     
						<li>
							<a href="gallery.html">Gallery</a>
						</li> 
						<li>
							<a href="about.html">History</a>
						</li>                  
						<li>
							<a href="register.php">Register</a>
						</li>                     
						<li>
							<a href="faq.html">FAQ's</a>
						</li>
						<li >
							<a href="contact.html">Contact</a>
						</li>
						<li class="active">
							<a href="reguser.php">User-Report</a>
						</li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

		<!-- Header Carousel -->
		<header id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="fill" style="background-image:url('images/redwood8.jpg');"></div>
					<div class="carousel-caption">
						<h2>Majestic Scienes </h2>
					</div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/redwood10.jpg');"></div>
					<div class="carousel-caption">
						<h2>Peaceful Aura </h2>
					</div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/redwood4.jpg');"></div>
					<div class="carousel-caption">
						<h2>Serene Tones</h2>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</header>



		<!-- Page Content -->
		<div class="container">

			<!-- Page Heading/Breadcrumbs -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Registered Users
						<small>Report</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a>
						</li>
						<li class="active">User-Report</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->

			<!-- Content Row -->
			<div class="row">
				<!--<div class="col-md-2 col-md-offset-5">-->
				<div class="col-md-8 col-lg-offset-2">
					<?php

					$servername = "mysql12.000webhost.com";
					$username = "a6467029_corrond";
					$password = "Purrungu25";
					$dbname = "a6467029_rsnpDB";
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT id, fname, lname, phone, email, state FROM rsnpTable";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						echo "<table class=\"table\"><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Email</th><th>State/Country</th></tr>";
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fname"]. "</td><td> " . $row["lname"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["email"]. "</td><td>" . $row["state"]. "</td></tr>";
						}
						echo "</table>";
					} else {
						echo "<center><i class=\"fa fa-smile-o fa-5x\"></i><br> <p>No one has registered yet. Hey! You should register.</p></center>";
					}

					$conn->close();
					?>  
				</div>
			</div>
			<!-- /.row -->

			<hr>

			<!-- Footer -->
			<footer>
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>Federico Watkins &diams; Web Program. and Design &diams; Copyright &copy; Redwood State &amp; National Park 2015 &diams; Class Project.</p>
					</div>
				</div>
			</footer>

		</div>
		<!-- /.container -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script>
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			})
		</script>
	</body>

</html>
