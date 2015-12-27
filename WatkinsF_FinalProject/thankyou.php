<!DOCTYPE html>
<html lang="en">
<!--************************************************************
* Federico Watkins  |  Web Program. and Design  |  12/09/2015  *
* Thank You page: Expresses gratitude for user registration    * 
* also inserts user input into database.                       *
*************************************************************-->
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
						<li >
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
					<div class="fill" style="background-image:url('images/redwood9.jpg');"></div>
					<div class="carousel-caption">
						<h2>Excusite Colors </h2>
					</div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/redwood11.jpg');"></div>
					<div class="carousel-caption">
						<h2>Natures' Plants </h2>
					</div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/redwood12.jpg');"></div>
					<div class="carousel-caption">
						<h2>Forest Meet Sea</h2>
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
					<h1 class="page-header">Thank You For Registering
						<small>Confirmation</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a>
						</li>
						<li class="active">Thank You</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->

			<!-- Content Row -->
			<div class="row">
				<!--<div class="col-md-2 col-md-offset-5">-->
				<div class="col-md-8 col-lg-offset-2">
					<?php

					if (empty($_POST) == false) 
					{
						//If the form has been filled out print information
						session_start();

						$servername = "mysql12.000webhost.com";
						$username = "a6467029_corrond";
						$password = "Purrungu25";
						$dbname = "a6467029_rsnpDB";
						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}else{

							$fname = $_POST["fname"];
							$lname = $_POST["lname"];
							$email = $_POST["email"];
							$phone = $_POST["phone"];
							$state = $_POST["state"];
							$uname = $_POST["username"];
							$pword = hash( 'sha512', $_POST["password"]);
							date_default_timezone_set('America/New_York');
							$date = date('m/d/Y h:i:s a', time());

							$_SESSION['date'] = $date;



							$sql = "INSERT INTO rsnpTable (fname, lname, email, phone, state, username, password, datetime)
					VALUES ('$fname', '$lname', '$email', $phone, '$state', '$uname', '$pword', '$date')";

							if ($conn->query($sql) === TRUE) {
								echo '<center>'.'<i class=\"fa fa-smile-o fa-5x\"></i>'.'<br>';						
								echo '<h4>Registration Information:</h4>';
								echo 'First Name: ' . $_POST['fname'] . '<br>';	
								echo 'Last Name: ' . $_POST['lname'] . '<br>';
								echo 'Username: ' . $_POST['username'] . '<br>'; 
								echo 'Email: ' . $_POST['email'] . '<br>';
								echo 'Phone Number: ' . $_POST['phone'] . '<br>';
								echo 'State/Country: ' . $_POST['state'] . '<br>' ;
								echo 'Registration Date &amp; Time: ' . $date . '<br>';
								echo "New record created successfully".'</center>';

							} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
								exit;
							}				
						} 	  

					}else{
						//If the form has not been filled out
						echo '<br>No one has registered<br>';

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
