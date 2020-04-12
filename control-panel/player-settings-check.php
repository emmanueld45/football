<?php
include '../dbconn.php';

if (isset($_POST['personnaldetails'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $birth = $_POST['birth'];
    $address = $_POST['address'];
    $origin = $_POST['origin'];

    $playerid = $_POST['playerid'];

    $sql = "UPDATE players SET firstname='$firstname', lastname='$lastname', phone='$phone', email='$email', birth='$birth', address='$address', origin='$origin' WHERE id='$playerid';";
    mysqli_query($conn, $sql);

    header("location: player-settings.php?playerid=$playerid&personnaldetailsupdated=true");
}







if (isset($_POST['matchdetails'])) {
    $position = $_POST['position'];
    $joiningdate = $_POST['joiningdate'];
    $contractduration = $_POST['contractduration'];
    $injurystatus = $_POST['injurystatus'];
    $bio = $_POST['bio'];


    $playerid = $_POST['playerid'];

    $sql = "UPDATE players SET position='$position', joiningdate='$joiningdate', contractduration='$contractduration', injurystatus='$injurystatus', bio='$bio' WHERE id='$playerid';";
    mysqli_query($conn, $sql);

    header("location: player-settings.php?playerid=$playerid&matchdetailsupdated=true");
}
