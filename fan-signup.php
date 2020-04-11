<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.fields {
			border: 1px solid lightgrey !important;
		}


		/** start of smaller screen */
		@media only screen and (max-width: 690px) {
			.form-container {
				width: 80%;
				margin: auto;
				margin-top: 50px;
				margin-bottom: 50px;
				background-color: #eee;
				padding: 20px;
				border: 1px solid lightgrey;
			}

		}

		/** end of smaller screen */





		/** start of bigger screen */
		@media only screen and (min-width: 690px) {
			.form-container {
				width: 40%;
				margin: auto;
				margin-top: 50px;
				margin-bottom: 50px;
				background-color: #eee;
				padding: 20px;
				border: 1px solid lightgrey;
			}

		}

		/** end of bigger screen */
	</style>
	<title>Football Club a Sports Category Bootstrap Responsive website Template | Gallery :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Football Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
	<link rel="stylesheet" href="css/lightbox.css"><!-- For-gallery-CSS -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- banner -->
	<div class="w3ls-banner">
		<div class="w3lsbanner-info">
			<!-- header -->
			<div class="header">
				<div class="container">
					<div class="header-mdl agileits-logo">
						<!-- header-two -->
						<h1><a href="index.html">Football Club</a></h1>
					</div>
					<div class="header-nav">
						<!-- header-three -->
						<nav class="navbar navbar-default">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- top-nav -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav cl-effect-16">
									<li><a href="index.html" data-hover="Home">Home</a></li>
									<li><a href="about.html" data-hover="About">About</a></li>
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="icons.html" data-hover="Web Icons">Web Icons</a></li>
											<li><a href="codes.html" data-hover="Short Codes">Short Codes</a></li>
										</ul>
									</li>
									<li><a href="gallery.html" class="active" data-hover="Gallery">Gallery</a></li>
									<li><a href="contact.html" data-hover="Contact">Contact</a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<!-- //header -->

		</div>
	</div>


	<!-- //banner -->


	<!-- form container start -->
	<div class="form-container">
		<div style="width:100%;padding:10px;text-align:center;margin-bottom:15px;">
			<h3 style="font-weight:bold;">Signup as a fan</h3>
		</div>

		<!-- full name -->
		<span>Full name *</span>
		<input type="text" class="form-control fields">
		<br>

		<!-- Phone number -->
		<span>Phone number *</span>
		<input type="tel" class="form-control fields">
		<br>

		<!-- Email address -->
		<span>Email address(optional)</span>
		<input type="email" class="form-control fields">
		<br>

		<button class="btn btn-success">Signup</button>


	</div>
	<!-- form container end -->


	<?php include 'footer.php'; ?>