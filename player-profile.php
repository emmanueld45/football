<?php
include 'dbconn.php';

$playerid = $_GET['playerid'];
$sql = "SELECT * FROM players WHERE id='$playerid';";
$result = mysqli_query($conn, $sql);
$numrows = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);


$firstname = $row['firstname'];
$lastname = $row['lastname'];
$image = $row['image'];
$position = $row['position'];
$birth = $row['birth'];
$email = $row['email'];
$phone = $row['phone'];
$joiningdate = $row['joiningdate'];
$address = $row['address'];
$origin = $row['origin'];
$position = $row['position'];
$injurystatus = $row['injurystatus'];
$contractduration = $row['birth'];
$gender = $row['gender'];
$bio = $row['bio'];
$playernumber = $row['playernumber'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .fields {
            border: 1px solid lightgrey !important;
        }


        /** start of smaller screen */
        @media only screen and (max-width: 690px) {

            .col-xs-6 {
                width: 49%;
            }

            .banner-container {
                width: 100%;
                height: auto;
                background-color: moccasin;

            }

            .menu-container {
                background-color: white;
                width: 100%;
                padding: 10px;
                display: none;

            }



            .menu-container li {
                list-style: none;
                display: block;
                text-align: center;
                padding: 10px;
                border-bottom: 1px solid lightgrey;
            }

            .menu-toggle-open-btn {
                padding: 10px;
                background-color: rgba(0, 0, 0, 0.8);
                color: white;
                border-radius: 4px;
                position: absolute;
                top: 10px;
                right: 10px;
                border: none;
            }

            .menu-toggle-close-btn {
                padding: 10px;
                background-color: rgba(0, 0, 0, 0.8);
                color: white;
                border-radius: 4px;
                position: absolute;
                top: 10px;
                right: 10px;
                border: none;
                display: none;
            }

            .join-community-btn {
                padding: 10px;
                background-color: green;
                color: white;
                border-radius: 5px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
            }

            .player-img {
                width: 100%;
                height: auto;
                margin-bottom: 70px;
            }

            .name-details {
                margin-bottom: 70px;

            }

            .read-more-btn {
                width: 100%;
                padding: 10px;
                background-color: white;
                color: black;
                border: 2px solid black;
                font-weight: bold;
            }

            .info-box {

                width: 100%;
                border-bottom: 1px solid lightgrey;
                margin-top: 10px;
                padding-bottom: 10px;
            }

            .info-small-text {
                margin-bottom: 10px;
            }

            .info-large-text {
                margin-bottom: 0px;
            }

        }

        /** end of smaller screen */





        /** start of bigger screen */
        @media only screen and (min-width: 690px) {
            .banner-container {
                width: 100%;
                height: auto;
                background-color: moccasin;

            }

            .menu-container {
                background-color: ;
                width: ]400px;
                float: right;
                margin-top: 20px;
                margin-right: 15px;

            }

            .menu-container li {
                list-style: none;
                display: inline-block;
                margin-right: 15px;
            }

            .menu-toggle-open-btn {
                display: none;
            }

            .menu-toggle-close-btn {
                display: none;
            }


            .join-community-btn {
                padding: 10px;
                background-color: green;
                color: white;
                border-radius: 5px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
            }

            .player-img {
                width: 100%;
                height: auto;
                margin-bottom: 40px;
                position: relative;
                top: -20px;
            }

            .player-number {
                position: absolute;
                left: -5%;
                bottom: 60px;
                font-weight: bold;
                font-size: 25px;
                border: none;
                background-color: rgba(0, 0, 0, 0);
            }

            .read-more-btn {
                width: 100%;
                padding: 10px;
                background-color: white;
                color: black;
                border: 2px solid black;
                font-weight: bold;
            }

            .info-box {

                width: 100%;
                border-bottom: 1px solid lightgrey;
                margin-top: 10px;
                padding-bottom: 10px;
            }

            .info-small-text {
                margin-bottom: 10px;
            }

            .info-large-text {
                margin-bottom: 0px;
            }

        }

        /** end of bigger screen */
    </style>
    <title>football</title>
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
    <link href="css/animate.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/lightbox.css"><!-- For-gallery-CSS -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <!-- //web-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="banner-container">
        <button class="menu-toggle-open-btn"><i class="fa fa-bars"></i></button>
        <button class="menu-toggle-close-btn"><i class="fa fa-times"></i></button>

        <ul class="menu-container">
            <li><a href="news.php" style="color:inherit;">News</a></li>
            <li><a href="gallery.php" style="color:inherit;">Gallery</a></li>
            <li><a href="match.php" style="color:inherit;">Match</a></li>
            <li><a href="team.php" style="color:inherit;">Team</a></li>
            <li><a href="theclub.php" style="color:inherit;">The club</a></li>
            <li><a href="" style="color:inherit;">Login</a></li>
            <li class="join-community-btn"><a href="joincommunity.php" style="color:inherit;">Join Community</a></li>

        </ul>


        <div class="container" style="position:relative;top:60px;">
            <div class="col-sm-4">
                <img src="<?php echo $image; ?>" class="player-img animated slideInRight">
            </div>

            <div class="col-sm-4">
                <div class="name-details">
                    <p>
                        <h2><?php echo $firstname; ?> </h2>
                    </p>
                    <p>
                        <h2> <?php echo $lastname; ?></h2>
                    </p>
                    <p><?php echo $position; ?></p>
                </div>

            </div>

            <div class="col-sm-4"></div>
            <button class="player-number">No.<?php echo $playernumber; ?></button>
        </div>

    </div>

    <!-- //banner -->

    <!-- selection start -->
    <div class="row" style="margin-top:10px;margin-bottom:10px;box-shadow:0px 3px 7px grey;">
        <div class="col-xs-6 col-sm-6" style="padding:10px;text-align:right;border-right:1px solid grey"><span class="profile-btn" style="color:orange;font-weight:600;">Profile </span></div>
        <div class="col-xs-6 col-sm-6" style="padding:10px;text-align:left;"><span class="social-btn">Social</span></div>
    </div>
    <!-- selection end -->


    <!-- profile details section start -->
    <div class="profile-details-container" style="display:;">

        <div class="container">
            <div class="row">

                <div id="bio" class="col-sm-6" style="padding:30px !important;border-right:1px solid lightgrey;">
                    <h4 style="color:orange;">Bio</h4><br>

                    <?php
                    if (strlen($bio) > 55) {
                        $cutbio = substr($bio, 0, 55);

                        $bio = $cutbio . '...';

                        echo "$bio
                        <br><br>";
                        echo "<button class='read-more-btn'>Read more</button>";
                    } else {
                        echo $bio;
                    }


                    ?>
                </div>

                <div id="info" class="col-sm-6" style="padding:30px !important;">

                    <h4 style="color:orange;">Info</h4>

                    <!-- info 1-->
                    <div class="info-box">
                        <p class="info-small-text">Date of birth</p>
                        <p class="info-large-text">
                            <!--<h3>24<sup>th</sup> May 1990</h3>-->
                            <h3><?php echo $birth; ?></h3>
                        </p>
                    </div>

                    <!-- info 2-->
                    <div class="info-box">
                        <p class="info-small-text">Location</p>
                        <p class="info-large-text">
                            <h3><?php echo $address; ?></h3>
                        </p>
                    </div>

                    <!-- info 3-->
                    <div class="info-box">
                        <p class="info-small-text">Position</p>
                        <p class="info-large-text">
                            <h3><?php echo $position; ?></h3>
                        </p>
                    </div>

                    <!-- info 4-->
                    <div class="info-box">
                        <p class="info-small-text">Status</p>
                        <p class="info-large-text">
                            <h3><?php echo $injurystatus; ?></h3>
                        </p>
                    </div>


                    <!-- info 5-->
                    <div class="info-box">
                        <p class="info-small-text">Join date</p>
                        <p class="info-large-text">
                            <!--<h3>20<sup>th</sup> April 2019</h3>-->
                            <h3><?php echo $joiningdate; ?></h3>
                        </p>
                    </div>




                </div>



            </div>
        </div>

    </div>
    <!--profile details section end -->




























    <!-- social details section start -->
    <div class="social-details-container" style="display:none;">

        <div class="container">
            <div class="row">

                <div id="bio" class="col-sm-6" style="padding:30px !important;border-right:1px solid lightgrey;">
                    <h4 style="color:orange;">Social</h4><br>
                    <p><i class="fa fa-twitter"></i> @emmycodes</p>
                    <br>
                    <p><i class="fa fa-instagram"></i> @emmycodes</p>
                </div>

                <div id="info" class="col-sm-6" style="padding:30px !important;">



                    <!-- embed start -->
                    <a class="twitter-timeline" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <!-- embed end -->

                </div>



            </div>
        </div>

    </div>
    <!--social details section end -->

    <?php include 'footer.php'; ?>