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
                background-color: orange;

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
                top: -30px;
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
            <li>News</li>
            <li>Gallery</li>
            <li>Match</li>
            <li>Team</li>
            <li>The club</li>
            <li>Login</li>
            <li class="join-community-btn">Join Community</li>

        </ul>


        <div class="container" style="position:relative;top:60px;">
            <div class="col-sm-4">
                <img src="images/player1.png" class="player-img animated slideInRight">
            </div>

            <div class="col-sm-4">
                <div class="name-details">
                    <p>
                        <h2>Emmanuel </h2>
                    </p>
                    <p>
                        <h2> Danjumbo</h2>
                    </p>
                    <p>Goal keeper</p>
                </div>
            </div>

            <div class="col-sm-4"></div>
        </div>

    </div>

    <!-- //banner -->

    <!-- selection start -->
    <div class="row" style="margin-top:10px;margin-bottom:10px;border-bottom:2px solid lightgrey">
        <div class="col-xs-6 col-sm-6" style="padding:10px;text-align:right;border-right:1px solid grey"><span id="bio-btn">BIO </span></div>
        <div class="col-xs-6 col-sm-6" style="padding:10px;text-align:left;"><span id="info-btn">INFO</span></div>
    </div>
    <!-- selection end -->


    <!-- details section start -->
    <div class="container">
        <div class="row">

            <div id="bio" class="col-sm-6" style="padding:30px !important;border-right:1px solid lightgrey;">
                <h4 style="color:orange;">Bio</h4>
                <p>this is a dummy title for this thing i am creating.. it is very handy when you just want to fill up some text</p>
                <br>
                <p>this is a dummy title for this thing i am creating.. it is very handy when you just want to fill up some text</p>
                <br>
                <p>this is a dummy title for this thing i am creating.. it is very handy when you just want to fill up some text</p>
                <br><br>
                <button class="read-more-btn">Read more</button>
            </div>

            <div id="info" class="col-sm-6" style="padding:30px !important;">

                <h4 style="color:orange;">Info</h4>

                <!-- info 1-->
                <div class="info-box">
                    <p class="info-small-text">Date of birth</p>
                    <p class="info-large-text">
                        <h3>24<sup>th</sup> May 1990</h3>
                    </p>
                </div>

                <!-- info 2-->
                <div class="info-box">
                    <p class="info-small-text">Location</p>
                    <p class="info-large-text">
                        <h3>River State</h3>
                    </p>
                </div>

                <!-- info 3-->
                <div class="info-box">
                    <p class="info-small-text">Position</p>
                    <p class="info-large-text">
                        <h3>Goal Keeper</h3>
                    </p>
                </div>

                <!-- info 4-->
                <div class="info-box">
                    <p class="info-small-text">Status</p>
                    <p class="info-large-text">
                        <h3>ACTIVE</h3>
                    </p>
                </div>


                <!-- info 5-->
                <div class="info-box">
                    <p class="info-small-text">Join date</p>
                    <p class="info-large-text">
                        <h3>20<sup>th</sup> April 2019</h3>
                    </p>
                </div>




            </div>



        </div>
    </div>
    <!-- details section end -->

    <?php include 'footer.php'; ?>