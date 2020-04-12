<?php
include '../dbconn.php';


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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .field {
            border: 1px solid grey;
            padding: 7px;
            border-radius: 3px;
        }

        /** start of smaller screen */
        @media only screen and (max-width: 690px) {
            .player-img {
                width: 200px;
                height: 200px;
                border-radius: 100px;
                border: 5px solid lightgrey;
                box-shadow: 0px 5px 10px lightgrey;

            }

            .player-name {
                width: 100%;
                padding: 10px;
                text-align: center;
                font-weight: 700;
                font-size: 20px;
                margin-bottom: 20px;

            }
        }

        /** end of smaller screen */





        /** start of bigger screen */
        @media only screen and (min-width: 690px) {

            .player-img {
                width: 200px;
                height: 200px;
                border-radius: 100px;
                border: 5px solid lightgrey;
                box-shadow: 0px 5px 10px lightgrey;

            }

            .player-name {
                width: 100%;
                padding: 10px;
                text-align: center;
                font-weight: 700;
                font-size: 25px;
                margin-bottom: 20px;

            }
        }

        /** end of bigger screen */
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Go-Round - Dashboard</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <?php include 'nav-bar.php'; ?>




    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h4 class="mt-4">Player Settings</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>


                <div style="width:100%;display:flex;justify-content:center;">
                    <img src="../<?php echo $image; ?>" class="player-img">
                </div>

                <div class="player-name"><?php echo $firstname . " " . $lastname; ?></div>





                <div class="row">
                    <!-- Personal Details start -->

                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header"><span style="font-weight:bold"><i class="fas fa-user mr-1"></i>Personal Details</span></div>
                            <div class="card-body">
                                <form action="player-settings-check.php" method="POST">
                                    <!-- first name-->
                                    <div class="">
                                        <label class="header">
                                            <h6>First Name</h6>
                                        </label>
                                        <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>">
                                    </div><br>


                                    <!-- last name-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Last Name</h6>
                                        </label>
                                        <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>">
                                    </div>

                                    <!-- email-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Email Address</h6>
                                        </label>
                                        <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                                    </div><br>

                                    <!-- phone-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Phone</h6>
                                        </label>
                                        <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                                    </div><br>

                                    <!-- Date of birth-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Date of Birth</h6>
                                        </label>
                                        <input type="text" class="form-control" name="birth" value="<?php echo $birth; ?>">
                                    </div><br>

                                    <!-- address-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Address</h6>
                                        </label>
                                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                                    </div><br>

                                    <!-- Origin-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Origin</h6>
                                        </label>
                                        <input type="text" class="form-control" name="origin" value="<?php echo $origin; ?>">
                                    </div><br>
                                    <input type="text" class="form-control" name="playerid" style="display:none;" value="<?php echo $playerid; ?>">

                                    <input type="submit" class="btn btn-primary" name="personnaldetails" value="Save changes">




                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- personal details end -->



                    <!-- match details start -->
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header"><span style="font-weight:bold"><i class="fas fa-flag mr-1"></i>Match Details</span></div>
                            <div class="card-body">
                                <form action="player-settings-check.php" method="POST">
                                    <!-- position-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Position</h6>
                                        </label>
                                        <input type="text" class="form-control" name="position" value="<?php echo $position; ?>">
                                    </div><br>

                                    <!-- Joining date-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Joining Date</h6>
                                        </label>
                                        <input type="text" class="form-control" name="joiningdate" value="<?php echo $joiningdate; ?>">
                                    </div><br>

                                    <!-- Contract Duration-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Contract Duration</h6>
                                        </label>
                                        <input type="text" class="form-control" name="contractduration" value="<?php echo $contractduration; ?>">
                                    </div><br>

                                    <!-- injury status-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Injury Status</h6>
                                        </label>
                                        <input type="text" class="form-control" name="injurystatus" value="<?php echo $injurystatus; ?>">
                                    </div><br>


                                    <!-- Biography-->
                                    <div class="">
                                        <label class="header">
                                            <h6>Biography</h6>
                                        </label>
                                        <textarea class="form-control" name="bio"><?php echo $bio; ?></textarea>
                                    </div><br>
                                    <input type="text" class="form-control" name="playerid" style="display:none;" value="<?php echo $playerid; ?>">

                                    <input type="submit" name="matchdetails" class="btn btn-primary" value="Save changes">


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- match details end -->




            </div>


            <?php
            if (isset($_GET['personnaldetailsupdated'])) {
                echo "<div class='alert alert-success' style='position:fixed;top:10px;right:10px;z-index:5000;padding:10px;background-color:mediumseagreen;color:white;border-radius:4px;'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   Personnal details successfully updated!
    </div>";
            }

            ?>

            <?php
            if (isset($_GET['matchdetailsupdated'])) {
                echo "<div class='alert alert-success' style='position:fixed;top:10px;right:10px;z-index:5000;padding:10px;background-color:mediumseagreen;color:white;border-radius:4px;'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   Match details successfully updated!
    </div>";
            }

            ?>

        </main>

        <?php include 'footer.php'; ?>