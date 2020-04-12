<?php
include '../dbconn.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];


$status = 0;

$time = time();
$date = date("y/m/d");

//image
$filename1 = $_FILES['image']['name'];
$filetmpname1 = $_FILES['image']['tmp_name'];
$filedestination1 = "../crewimages/" . $filename1;
$image = "crewimages/" . $filename1;
move_uploaded_file($filetmpname1, $filedestination1);


$sql = "INSERT INTO technicalcrew (image, firstname, lastname, phone, status, time, date) VALUES ('$image', '$firstname', '$lastname', '$phone', '$status', '$time', '$date');";
mysqli_query($conn, $sql);

header("location: add-crew-member.php?memberadded=true");
