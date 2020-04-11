<!DOCTYPE html>
<html lang="en">

<head>
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
                <h4 class="mt-4">Hi <?php echo "Admin"; ?>,</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body"><span style="font-size: 20px;font-weight: bold;"><i class="fa fa-user"></i> Players</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <!--<a class="small text-white stretched-link" href="#">View Details</a>-->
                                <a href="players.php"><button class="btn btn-info">open</button></a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body"><span style="font-size: 20px;font-weight: bold;"><i class="fa fa-edit"></i> Gallery</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <!--<a class="small text-white stretched-link" href="#">View Details</a>-->
                                <a href="gallery.php"><button class="btn btn-info">open</button></a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body"><span style="font-size:20px;font-weight:bold;"><i class="fa fa-flag"></i> Matches</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <!-- <a class="small text-white stretched-link" href="#">View Details</a>-->
                                <a href="matches.php"><button class="btn btn-info">open</button></a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body"><span style="font-size:20px;font-weight:bold;"><i class="fa fa-users"></i> Technical Crew</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <!--<a class="small text-white stretched-link" href="#">View Details</a>-->
                                <a href="technical-crew.php"><button class="btn btn-info">open</button></a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card  text-white mb-4" style="background-color:grey;">
                            <div class="card-body"><span style="font-size:20px;font-weight:bold;"><i class="fa fa-laptop"></i> News</span></div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <!--<a class="small text-white stretched-link" href="#">View Details</a>-->
                                <a href="news.php"><button class="btn btn-info">open</button></a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>




                <!--
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
                -->









        </main>

        <?php include 'footer.php'; ?>