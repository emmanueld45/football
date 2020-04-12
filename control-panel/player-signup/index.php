<!doctype html>
<html lang="en">

<head>
    <title>GO ROUND FC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Softball Registration Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- font files -->
    <link href="//fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
    <!-- /font files -->

    <!-- bootstrap-->
    <!--<link href="css/bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />-->

    <!-- css files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
    <!-- /css files -->
    <link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />

    <!-- <script src="css/bootstrap/js/bootstrap.min.js"></script>
    -->


    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>

<body>
    <div class="w3-banner-main">
        <div class="center-container">
            <h1 class="header-w3ls">Register Player</h1>
            <div class="content-top">
                <div class="content-w3ls">
                    <div class="form-w3ls">
                        <form action="add-player-check.php" method="POST" enctype="multipart/form-data">
                            <div class="content-wthree1">
                                <div class="grid-agileits1">

                                    <div class="form-control">
                                        <label class="header">First Name </label>
                                        <input type="text" id="name" name="firstname" placeholder="" title="Please enter your Full Name" required="">
                                    </div>

                                    <div class="form-control">
                                        <label class="header">Last Name </label>
                                        <input type="text" id="name" name="lastname" placeholder="" title="Please enter your Full Name" required="">
                                    </div>

                                    <div class="form-control">
                                        <label class="header">Email </label>
                                        <input type="email" id="email" name="email" placeholder="" title="Please enter a Valid Email Address" required="">
                                    </div>


                                    <div class="grid-w3layouts1">
                                        <div class="w3-agile1">
                                            <label class="rating">Choose gender </label>
                                            <ul>
                                                <li>
                                                    <input type="radio" id="a-option" name="gender" value="Male">
                                                    <label for="a-option">Male </label>
                                                    <div class="check"></div>
                                                </li>
                                                <li>
                                                    <input type="radio" id="b-option" name="gender" value="Female">
                                                    <label for="b-option">Female</label>
                                                    <div class="check">
                                                        <div class="inside"></div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-control">
                                        <label class="header">Date of joining </label>
                                        <input id="datepicker1" name="joiningdate" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                                    </div>
                                    <div class="form-control">
                                        <label class="header">Date of Birth </label>
                                        <input id="datepicker2" name="birth" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                                    </div>
                                    <!--
                                    <div class="gaps">
                                        <label class="header">Time </label>
                                        <input type="text" id="timepicker" name="Time" class="timepicker form-control" value="">
                                    </div>-->
                                </div>
                            </div>
                    </div>
                    <div class="form-w3ls-1">
                        <div class="form-control">
                            <label class="header">Phone Number </label>
                            <input type="text" id="name" name="phone" placeholder="" title="Please enter your Phone Number" required="">
                        </div>
                        <div class="form-control">
                            <label class="header">Address </label>
                            <input type="text" id="name" name="address" placeholder="" title="Please enter your Full Name" required="">
                        </div>
                        <div class="form-control">
                            <label class="header">Origin </label>
                            <input type="text" id="name" name="origin" placeholder="" title="Please enter your Full Name" required="">
                        </div>
                        <div class="form-control">
                            <label class="header">Position </label>
                            <input type="text" id="name" name="position" placeholder="" title="Please enter your Full Name" required="">
                        </div>
                        <div class="form-control">
                            <label class="header">Player Number </label>
                            <select class="form-control" name="playernumber">
                                <?php
                                $x = 1;
                                while ($x < 14) {
                                    echo "<option>$x</option>";
                                    $x++;
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-control">
                            <label class="header">Player photo </label>
                            <input type="file" id="name" name="image" placeholder="" title="Please enter your Full Name" required="" style="padding:10px;">
                        </div>
                        <input type="submit" name="submit" value="Register">
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <p class="copyright">© Go round FC</p>
        </div>
    </div>



    <?php
    if (isset($_GET['playeradded'])) {
        echo "<div class='alert alert-success' style='position:fixed;top:10px;right:10px;z-index:5000;padding:10px;background-color:mediumseagreen;color:white;border-radius:4px;'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    Player was successfully created!
    </div>";
    }

    ?>



    <!-- Calendar -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });
    </script>
    <!-- //Calendar -->
    <script type="text/javascript" src="js/wickedpicker.js"></script>
    <script type="text/javascript">
        $('.timepicker').wickedpicker({
            twentyFour: false
        });
    </script>


</body>

</html>