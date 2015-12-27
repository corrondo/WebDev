<!DOCTYPE html>
<html lang="en">
<!--************************************************************
* Federico Watkins  |  Web Program. and Design  |  12/09/2015  *
* Register page: Allows users to register an account           *
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
						<li class="active">
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
					<div class="fill" style="background-image:url('images/redwood5.jpg');"></div>
					<div class="carousel-caption">
						<h2>Delightful Walks </h2>
					</div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/redwood6.jpg');"></div>
					<div class="carousel-caption">
						<h2>Natures Best Shades </h2>
					</div>
				</div>
				<div class="item">
					<div class="fill" style="background-image:url('images/redwood7.jpg');"></div>
					<div class="carousel-caption">
						<h2>Visual Stimulus</h2>
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
					<h1 class="page-header">Account Registration
						<small>RSNP</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a>
						</li>
						<li class="active">Register</li>
					</ol>
				</div>
			</div>
			<!-- /.row -->



			<!-- Registration Form -->
			
			<div class="row">
				<div class="col-md-8">

					<h3>Register</h3>
					
					<form name="sentMessage" method="post" action="thankyou.php" >
						<div class="control-group form-group has-feedback">
							<div class="controls">
								<label>First Name:</label>
								<input type="text" class="form-control" name="fname" required data-validation-required-message="Please enter your name.">
								<p class="help-block"></p>

							</div>
						</div>
						<div class="control-group form-group  has-feedback">
							<div class="controls">
								<label>Last Name:</label>
								<input type="text" class="form-control" name="lname" required data-validation-required-message="Please enter your name.">
								<p class="help-block"></p>

							</div>
						</div>
						<div class="control-group form-group has-feedback">
							<div class="controls">
								<label>Email Address:</label>
								<input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
							</div>
						</div>
						<div class="control-group form-group has-feedback">
							<div class="controls">
								<label>Phone Number:</label>
								<input type="text" class="form-control" name="phone" required data-validation-required-message="Please enter your username.">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group has-feedback">
							<div class="controls">
								<label>State/Country:</label>
								<input type="text" class="form-control" name="state" required data-validation-required-message="Please enter your username.">
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group has-feedback">
							<div class="controls">
								<label>Username:</label>
								<input type="text" class="form-control" name="username" required data-validation-required-message="Please enter your username.">
								<p class="help-block"></p>
							</div>
						</div>

						<div class="control-group form-group has-feedback">
							<div class="controls">
								<label>Password:</label>
								<input type="password" class="form-control" id="password" name="password"  required data-validation-required-message="Please create a password.">
							</div>
						</div>
						<div class="control-group form-group has-feedback">
							<div class="controls">
								<label>Confirm Password:</label>
								<input type="password" class="form-control" id="Password" required data-validation-match-match="password"  data-validation-match-message="Confirmation Password doesn't match" data-validation-required-message="Please confirm a password.">
							</div>
						</div>
						<div class="control-group form-group has-feedback">
							<div class="controls">
								<label>Please agree to policy:</label>
								<input id="agree" class="checkbox" type="checkbox" name="agree" required data-validation-required-message="You must agree to terms.">
							</div>
						</div>
						<div id="success"></div>
						<!-- For success/fail messages -->
						<button type="submit" name="submit" class="btn btn-primary">Register</button>
						
					</form>
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

			<?php
			session_start();
			//Send variables to the session
			date_default_timezone_set('America/New_York');
			$date = date('m/d/Y h:i:s a', time());

			$_SESSION['date'] = $date;
			?>

		</div>
		<!-- /.container -->

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Registration Form JavaScript -->
		
		<script src="js/jqBootstrapValidation.js"></script>
		<!-- <script src="js/contact_me.js"></script>-->
		<script>
			$('.carousel').carousel({
				interval: 5000 //changes the speed
			})
		</script>
	</body>

</html>
