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
                    <img src="assets/img/t3.jpg" class="player-img">
                </div>

                <div class="player-name">John Doe</div>





                <div class="row">
                    <!-- Personal Details start -->
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header"><span style="font-weight:bold"><i class="fas fa-user mr-1"></i>Personal Details</span></div>
                            <div class="card-body">

                                <!-- first name-->
                                <div class="">
                                    <label class="header">
                                        <h6>First Name</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>


                                <!-- last name-->
                                <div class="">
                                    <label class="header">
                                        <h6>Last Name</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div>

                                <!-- email-->
                                <div class="">
                                    <label class="header">
                                        <h6>Email Address</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>

                                <!-- phone-->
                                <div class="">
                                    <label class="header">
                                        <h6>Phone</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>

                                <!-- Date of birth-->
                                <div class="">
                                    <label class="header">
                                        <h6>Date of Birth</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>

                                <!-- address-->
                                <div class="">
                                    <label class="header">
                                        <h6>Address</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>

                                <!-- Origin-->
                                <div class="">
                                    <label class="header">
                                        <h6>Origin</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>

                                <button class="btn btn-primary">Save Changes</button>





                            </div>
                        </div>
                    </div>
                    <!-- personal details end -->



                    <!-- match details start -->
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header"><span style="font-weight:bold"><i class="fas fa-flag mr-1"></i>Match Details</span></div>
                            <div class="card-body">

                                <!-- position-->
                                <div class="">
                                    <label class="header">
                                        <h6>Position</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>

                                <!-- Joining date-->
                                <div class="">
                                    <label class="header">
                                        <h6>Joining Date</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>

                                <!-- Contract Duration-->
                                <div class="">
                                    <label class="header">
                                        <h6>Contract Duration</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>

                                <!-- injury status-->
                                <div class="">
                                    <label class="header">
                                        <h6>Injury Status</h6>
                                    </label>
                                    <input type="text" class="form-control" name="name">
                                </div><br>


                                <!-- Biography-->
                                <div class="">
                                    <label class="header">
                                        <h6>Biography</h6>
                                    </label>
                                    <textarea class="form-control" name="name"></textarea>
                                </div><br>

                                <button class="btn btn-primary">Save Changes</button>



                            </div>
                        </div>
                    </div>
                </div>
                <!-- match details end -->




            </div>




        </main>

        <?php include 'footer.php'; ?>