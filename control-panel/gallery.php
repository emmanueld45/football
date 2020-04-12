<?php
include '../dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        /** start of smaller screen */
        @media only screen and (max-width: 690px) {
            .gallery-box {
                height: 220px;
                background-color: ;
                border: 2px solid lightgrey;
                padding: 10px;
            }

            .gallery-img {
                width: 100%;
                height: 170px;

            }

            .remove-photo-btn {

                background-color: rgba(0, 0, 0, 0.8);
                color: white;
                position: absolute;
                top: 0px;
                right: 0px;
                border: none;
                border-radius: 2px;
                font-size: 13px;
                padding: 4px;
                transition: 1s ease;
                display: none;

            }

            .gallery-box:hover .remove-photo-btn {
                display: block;
            }

            .caption {
                width: 100%;
                font-weight: normal;
                text-align: center;
                padding: 5px;
            }
        }

        /** end of smaller screen */





        /** start of bigger screen */
        @media only screen and (min-width: 690px) {
            .gallery-box {
                height: 230px;
                background-color: ;
                border: 2px solid lightgrey;
                padding: 10px;
            }

            .gallery-img {
                width: 100%;
                height: 180px;

            }

            .remove-photo-btn {

                background-color: rgba(0, 0, 0, 0.8);
                color: white;
                position: absolute;
                top: 0px;
                right: 0px;
                border: none;
                border-radius: 2px;
                font-size: 13px;
                padding: 4px;
                transition: 1s ease;
                display: none;

            }

            .gallery-box:hover .remove-photo-btn {
                display: block;
            }

            .caption {
                width: 100%;
                font-weight: normal;
                text-align: center;
                padding: 5px;
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
                <h4 class="mt-4">Photo Gallery</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">add or delete gallery photos</li>
                </ol>




                <!--gallery-->
                <div style="width:100%;padding:10px;display:flex;justify-content:flex-end;">
                    <a href="add-gallery-photo.php"><button class="btn btn-danger">Add photo</button></a>
                </div>

                <div class="row gallery">
                    <?php
                    $sql = "SELECT * FROM gallery;";
                    $result = mysqli_query($conn, $sql);
                    $numrows = mysqli_num_rows($result);
                    if ($numrows != 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $caption = $row['caption'];
                            $image = $row['photo'];
                            $imageid = $row['id'];

                    ?>
                            <div class="col-sm-3 mr-2 mb-2 gallery-box">
                                <a href="remove-gallery-photo.php" style="color:inherit;"><button class="remove-photo-btn">remove <i class="fa fa-times"></i></button></a>
                                <img src="../<?php echo $image; ?>" class="gallery-img">
                                <div class="caption"><i><?php echo $caption; ?></i></div>
                            </div>
                    <?php

                        }
                    } else {

                        echo "<div class='alert alert-info'>
                        No Photo in your gallery yet!  click <a href='add-gallery-photo.php' class='alert-link'></a> to add a photo
                        </div>";
                    }
                    ?>
                </div>
                <!--//gallery-->

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




            </div>




        </main>

        <?php include 'footer.php'; ?>