<?php
include '../dbconn.php';

$caption = $_POST['caption'];

$status = 0;

$time = time();
$date = date("y/m/d");


//image
$filename1 = $_FILES['image']['name'];
$filetmpname1 = $_FILES['image']['tmp_name'];
$filedestination1 = "../galleryimages/" . $filename1;
$image = "galleryimages/" . $filename1;
move_uploaded_file($filetmpname1, $filedestination1);


$sql = "INSERT INTO gallery (photo, caption, status, time, date) VALUES ('$image', '$caption', '$status', '$time', '$date');";
mysqli_query($conn, $sql);
header("location: add-gallery-photo.php?photouploaded=true");
