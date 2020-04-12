<?php
include '../dbconn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        /** start of smaller screen */
        @media only screen and (max-width: 690px) {
            .edit-member-btn {

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

            .member-box:hover .edit-member-btn {
                display: block;
            }
        }

        /** end of smaller screen */





        /** start of bigger screen */
        @media only screen and (min-width: 690px) {


            .edit-member-btn {

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

            .member-box:hover .edit-member-btn {
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
                <h4 class="mt-4">Technical crew Members</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">view, edit and add players</li>
                </ol>

                <div style="width:100%;padding:10px;display:flex;justify-content:flex-end;">
                    <a href="add-crew-member.php"><button class="btn btn-danger">Add Member</button></a>
                </div>

                <!-- crew member start -->
                <div class="row">

                    <?php
                    $sql = "SELECT * FROM technicalcrew;";
                    $result = mysqli_query($conn, $sql);
                    $numrows = mysqli_num_rows($result);
                    if ($numrows != 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $image = $row['image'];

                    ?>
                            <div class="col-sm-3 mr-2 mb-2 member-box">
                                <div class="card w-100">
                                    <a href="edit-crew-member.php" style="color:inherit;"><button class="edit-member-btn">Edit details <i class="fa fa-edit"></i></button></a>
                                    <img class="card-img-top" src="../<?php echo $image; ?>" alt="Card image" style="width:100%;height:200px;object-fit:cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <span style="font-weight:bold;"><?php echo $firstname . " " . $lastname; ?></span>
                                        </h5>
                                        <!--<p class="card-text">Goal Keeper</p>-->
                                        <!--<a href="../player-profile.php" class="btn btn-primary">Member Settings</a>-->
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    } else {

                        echo "<div class='alert alert-info'>
                        No technical crew member yet!  click <a href='add-crew-member.php' class='alert-link'></a> to add member
                        </div>";
                    }
                    ?>



                </div>

                <!-- crew members end -->




            </div>




        </main>

        <?php include 'footer.php'; ?>