<?php
include 'dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<style>
		/** start of smaller screen */
		@media only screen and (max-width: 690px) {

			.header-logo {
				width: 100px;
				height: 100px;
			}


			.owl-carousel-box {
				width: 220px;
				height: auto;

				background-color: ;
				border: 1px solid lightgrey;
				padding: 3px;



			}

			.player-img {
				width: 100%;
				height: 200px;
			}
		}

		/** end of smaller screen */





		/** start of bigger screen */
		@media only screen and (min-width: 690px) {
			.header-logo {
				width: 170px;
				height: 170px;
				position: absolute;
				top: 0px;
				left: 0px;
			}


			.owl-carousel-box {
				width: 200px;
				height: auto;

				background-color: ;
				border: 1px solid lightgrey;
				padding: 3px;



			}

			.player-img {
				width: 100%;
				height: 230px;
			}
		}

		/** end of bigger screen */
	</style>
	<title>Football Club a Sports Category Bootstrap Responsive website Template | Home :: w3layouts</title>
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


	<!-- //Custom Theme files -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">

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
				<img src="images/goround-logo.png" class="header-logo">
				<div class="container">
					<div class="header-mdl agileits-logo">
						<!-- header-two -->
						<h1><a href="index.html">G0-Round FC</a></h1>
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
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:rgba(0, 0, 0, 0.7) !important;border-radius:10px !important;height:100px !important;">
								<ul class="nav navbar-nav cl-effect-16" style="font-weight:bold !important;">
									<li><a href="index.html" class="active" data-hover="Home">Home</a></li>
									<li><a href="about.html" data-hover="About">About</a></li>
									<li><a href="about.html" data-hover="The club">The club</a></li>
									<li><a href="about.html" data-hover="Matches">Matches</a></li>
									<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Team <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="team.php?type=players" data-hover="Players">Players</a></li>
											<li><a href="team.php?type=crew" data-hover="Technical Crew">Technical Crew</a></li>
										</ul>
									</li>
									<li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
									<li><a href="contact.html" data-hover="Contact">Contact</a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<!-- //header -->
			<!-- banner-text -->
			<div class="banner-text agileinfo">
				<div class="container">
					<div class="agileitsbnr-textinfo">
						<h2>We play with passion, <br> get to know us!</h2>

					</div>
					<!-- arrow bounce -->

					<!-- //arrow bounce -->
				</div>
			</div>
			<!-- //banner-text -->
		</div>
	</div>
	<!-- //banner -->
	<!--about-->
	<div class="about">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Main Features</h3>
				<p>A football team is a group of players selected to play together in the various team sports known as football. </p>
			</div>
			<div class="agileits-banner-grids text-center">
				<div class="banner-bottom-girds">
					<div class="col-md-4  col-sm-4 clr1 agileits-banner-grid">
						<span class="fa fa-sun-o banner-icon" aria-hidden="true"></span>
						<h4>Feature-1</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut.</p>

					</div>
					<div class="col-md-4 col-sm-4 clr2 agileits-banner-grid">
						<span class="fa fa-arrows banner-icon" aria-hidden="true"></span>
						<h4>Feature-2</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut.</p>

					</div>
					<div class=" col-md-4 col-sm-4 clr3 agileits-banner-grid">
						<span class="fa fa-cog banner-icon" aria-hidden="true"></span>
						<h4>Feature-3</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut.</p>

					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--//about-->
	<!-- carrer --
	<div class="carrer">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header ggg">Career Starts Here</h3>
				<p class="hhh">A football team is a group of players selected to play together in the various team sports known as football. </p>
			</div>
			<div class="carrer-top">
				<div class="col-md-6 carrer-left">
				</div>
				<div class="col-md-6 carrer-right">
					<div class="car-ght">
						<h5>Aenean ante massa</h5>
						<p>Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
					<div class="car-ght">
						<h5>Aenean ante massa</h5>
						<p>Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
					<div class="car-ght">
						<h5>Aenean ante massa</h5>
						<p>Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.</p>
					</div>
				</div>
			</diV>
		</div>
	</div>
	<!-- //carrer -->

	<!-- welcome -->
	<div class="about-3">
		<div class="wthree_head_section">
			<h3 class="w3l_header">Welcome To Club</h3>
			<p>A football team is a group of players selected to play together in the various team sports known as football.</p>
		</div>
		<div class="container">
			<div class="d-flex">

				<div class="about1">
					<h4>Join our club free. Our members are people of different status with one passion that unites everyone - that is Football. Professionals, amateurs and beginners are welcome!</h4>
					<p class="details">Play Football, relax with soulmates, enjoy the atmosphere of fair play and good talk with interesting people.</p>
					<ul class="about-list">
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Professional sport equipment</li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Football kit for each member</li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Safisfaction from the game process</li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Polite opponents</li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Amazing scenery</li>
					</ul>
				</div>
				<div class="about2">

				</div>
			</div>

		</div>
	</div>
	<!-- //welcome -->
	<!-- feedback --
	<div class="feedback section-w3ls about-w3ls">
		<div class="feedback-agileinfo">
			<div class="container">
				<div class="wthree_head_section">
					<h3 class="w3l_header ggg">Testimonials</h3>
					<p class="hhh">A football team is a group of players selected to play together in the various team sports known as football.</p>
				</div>
				<div class="agileits-feedback-grids">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t1.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Mary Jane</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t2.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Peter</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t3.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Steven</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t4.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Mary Jane</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t1.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Guptill</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p> Sed semper leo metus, a lacinia eros semper at. Etiam sodales orci sit amet vehicula pellentesque. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="images/t2.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5> Wilson</h5>
										<p>Vestibulum</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //feedback -->

	<!-- pricing --
	<div class="w3ls-section wthree-pricing">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Club Membership</h3>
				<p>A football team is a group of players selected to play together in the various team sports known as football.</p>
			</div>
			<div class="pricing-grids-info">
				<div class="pricing-grid grid-one">
					<div class="w3ls-top">
						<h3>Junior</h3>
					</div>
					<div class="w3ls-bottom">
						<ul class="count">
							<li>Our club says that players must be less than 19 years as at January, 1st.</li>
						</ul>
						<h4> 200<span class="sup">$</span> </h4>
						<div class="more">
							<a href="contact.html">Join Now</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid grid-two">
					<div class="w3ls-top">
						<h3>Group</h3>
					</div>
					<div class="w3ls-bottom">
						<ul class="count">
							<li>Save $150 every year compared to the monthly plan by paying yearly.</li>
						</ul>
						<h4> 350<span class="sup">$</span> </h4>
						<div class="more">
							<a href="contact.html">Join Now</a>
						</div>
					</div>
				</div>
				<div class="pricing-grid grid-three">
					<div class="w3ls-top">
						<h3>Individual</h3>
					</div>
					<div class="w3ls-bottom">
						<ul class="count">
							<li>Save $98 every year compared to the monthly plan by paying yearly.</li>
						</ul>
						<h4> 500<span class="sup">$</span> </h4>
						<div class="more">
							<a href="contact.html">Join Now</a>
						</div>
					</div>
				</div>
				<div class="zb pricing-grid grid-four">
					<div class="w3ls-top">
						<h3>Senior</h3>
					</div>
					<div class="w3ls-bottom">
						<ul class="count">
							<li>Our club says that players must be less than 25 years as at January, 1st.</li>
						</ul>
						<h4> 800<span class="sup">$</span> </h4>
						<div class="more">
							<a href="contact.html">Join Now</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<!--End-slider-script
			</div>
		</div>
	</div>
	<!--//pricing-->



	<!-- owl courasel start -->
	<div class="container">
		<div id="owl-carousel" style="padding:4px !important;">
			<?php
			$sql = "SELECT * FROM players;";
			$result = mysqli_query($conn, $sql);
			$numrows = mysqli_num_rows($result);
			if ($numrows != 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$firstname = $row['firstname'];
					$lastname = $row['lastname'];
					$image = $row['image'];
					$position = $row['position'];
					$playerid = $row['id'];
			?>
					<div class="owl-carousel-box">
						<div class="card w-100" style="padding:10px;">

							<img class="card-img-top player-img" src="<?php echo $image; ?>" alt="Card image">
							<div class="card-body">
								<div style="width:100%;padding:5px;">
									<h4 class="card-title">
										<span style="font-weight:;"><?php echo $firstname . " " . $lastname; ?></span>
									</h4>
								</div>
								<p class="card-text"><?php echo $position; ?></p>
								<a href="player-profile.php?playerid=<?php echo $playerid; ?>" class="btn btn-primary">view profile</a>
							</div>
						</div>

					</div>


			<?php }
			} ?>









			<!--
			<?php
			$x = 0;
			while ($x < 8) {
			?>
				<div class="owl-carousel-box"></div>
			<?php $x++;
			}
			?>
			-->
		</div>
	</div>
	<!-- owl courasel end -->
	<?php include 'footer.php'; ?>