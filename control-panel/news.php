<?php
include '../dbconn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /** start of smaller screen */
        @media only screen and (max-width: 690px) {
            .delete-news-btn {

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

            .news-box:hover .delete-news-btn {
                display: block;
            }
        }

        /** end of smaller screen */





        /** start of bigger screen */
        @media only screen and (min-width: 690px) {


            .delete-news-btn {

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

            .news-box:hover .delete-news-btn {
                display: block;
            }
        }

        /** end of bigger screen */
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>News</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">

    <?php include 'nav-bar.php'; ?>




    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h4 class="mt-4">News</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>


                <div style="width:100%;padding:10px;display:flex;justify-content:flex-end;">
                    <a href="add-news.php"><button class="btn btn-danger">Add News</button></a>
                </div>

                <!--  news start -->
                <div class="row">

                    <?php
                    $sql = "SELECT * FROM news;";
                    $result = mysqli_query($conn, $sql);
                    $numrows = mysqli_num_rows($result);
                    if ($numrows != 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $title = $row['title'];
                            $image = $row['image'];
                            $content = $row['content'];
                            $newsid = $row['id'];

                            if (strlen($title) > 20) {
                                $cuttitle = substr($title, 0, 20);

                                $title = $cuttitle . '...';
                            }

                            if (strlen($content) > 25) {
                                $cutcontent = substr($content, 0, 25);

                                $content = $cutcontent . '...';
                            }
                    ?>
                            <div class="col-sm-3 mr-2 mb-2 news-box">
                                <div class="card w-100">
                                    <a href="edit-player.php" style="color:inherit;"><button class="delete-news-btn">Delete <i class="fa fa-edit"></i></button></a>
                                    <img class="card-img-top" src="../<?php echo $image; ?>" alt="Card image" style="width:100%;height:200px;object-fit:cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <span style="font-weight:bold;"><?php echo $title; ?></span>
                                        </h5>
                                        <p class="card-text"></p><?php echo $content; ?>
                                        <a href="../news.php" class="btn btn-primary">Read News</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {

                        echo "<div class='alert alert-info'>
                        No News has been posted yet!  click <a href='add-news.php' class='alert-link'></a> to post a news
                        </div>";
                    }
                    ?>



                </div>

                <!-- news end -->



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