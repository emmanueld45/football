<!DOCTYPE html>
<html lang="en">

<head>


    <style>
        /** start of smaller screen */
        @media only screen and (max-width: 690px) {}

        /** end of smaller screen */





        /** start of bigger screen */
        @media only screen and (min-width: 690px) {}

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
                <h4 class="mt-4"><i class="fa fa-laptop"></i> Add News</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>




                <form action="add-news-check.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Details</div>
                                <div class="card-body">


                                    <div class="">
                                        <label class="header">
                                            <h5>Title</h5>
                                        </label>
                                        <input type="text" id="name" name="title" class="form-control" placeholder="the title goes here...">
                                    </div><br>

                                    <div class="">
                                        <label class="header">
                                            <h5>Content</h5>
                                        </label>
                                        <textarea type="text" name="content" class="form-control" placeholder="type the content of the news" style="height:400px;">

                                    </textarea>
                                    </div>



                                </div>
                            </div>
                        </div>






                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Photo</div>
                                <div class="card-body">


                                    <div class="">
                                        <label class="header">
                                            <h5>Cover Photo</h5>
                                        </label>
                                        <input type="file" id="name" name="image" class="form-control">
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>


                    <input type="submit" class="btn btn-success" name="submit" value="Upload News">

                </form>
            </div>


            <?php
            if (isset($_GET['newsuploaded'])) {
                echo "<div class='alert alert-success' style='position:fixed;top:10px;right:10px;z-index:5000;padding:10px;background-color:mediumseagreen;color:white;border-radius:4px;'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    News was successfully posted!
    </div>";
            }

            ?>


        </main>

        <?php include 'footer.php'; ?>