<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		.fields {
			border: 1px solid lightgrey !important;
		}


		/** start of smaller screen */
		@media only screen and (max-width: 690px) {

			.btn-container {
				padding: 10px;
				margin-top: 10px;
				margin-bottom;
				10px;
				display: flex;
				flex-flow: row nowrap;
				justify-content: center;
				width: 80%;
				margin: auto;
			}

			.players-btn {
				width: 80%;
				padding: 10px;
				border: none;
				background-color: royalblue;
				color: white;

			}

			.technical-btn {
				width: 45%;
				padding: 10px;
				border: none;
				background-color: #eee;
				color: black;
				border-right: 1px solid lightgrey;
				border-top: 1px solid lightgrey;
				border-bottom: 1px solid lightgrey;

			}

		}

		/** end of smaller screen */





		/** start of bigger screen */
		@media only screen and (min-width: 690px) {

			.btn-container {
				padding: 10px;
				margin-top: 10px;
				margin-bottom;
				10px;
				display: flex;
				flex-flow: row nowrap;
				justify-content: center;
				width: 40%;
				margin: auto;
			}

			.players-btn {
				width: 45%;
				padding: 10px;
				border: none;
				background-color: royalblue;
				color: white;

			}

			.technical-btn {
				width: 45%;
				padding: 10px;
				border: none;
				background-color: #eee;
				color: black;
				border-right: 1px solid lightgrey;
				border-top: 1px solid lightgrey;
				border-bottom: 1px solid lightgrey;

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
						<h1><a href="index.html">Team</a></h1>
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




	<!-- team container start -->
	<div class="btn-container">

		<button type="button" class="players-btn">Players</button>
		<button type="button" class="technical-btn">Technical crew</button>
	</div>
	<div class="container">
		<div class="row p-2">




			<?php
			$x = 0;
			while ($x < 8) {
			?>
				<div class="col-sm-4 col-lg-3 p-2" style="margin-right:;margin-bottom:20px;">

					<div class="card w-100">
						<img class="card-img-top" src="images/t2.jpg" alt="Card image" style="width:100%;height:200px;object-fit:cover;">
						<div class="card-body"><br>
							<h4 class="card-title">
								<h3 style="font-weight:bold;">John Doe
							</h4>
							<p class="card-text">Goal Keeper</p>
							<a href="player-profile.php" class="btn btn-primary">See Profile</a>
						</div>
					</div>

				</div>
			<?php
				$x++;
			}
			?>







		</div>
	</div>
	<!-- team container end -->
	<?php include 'footer.php'; ?>