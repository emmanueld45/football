<?php
include '../dbconn.php';

$title = $_POST['title'];
$content = $_POST['content'];

$status = 0;

$time = time();
$date = date("y/m/d");

//image
$filename1 = $_FILES['image']['name'];
$filetmpname1 = $_FILES['image']['tmp_name'];
$filedestination1 = "../newsimages/" . $filename1;
$image = "newsimages/" . $filename1;
move_uploaded_file($filetmpname1, $filedestination1);


$sql = "INSERT INTO news (image, title, content, status, time, date) VALUES ('$image', '$title', '$content', '$status', '$time', '$date');";
mysqli_query($conn, $sql);

header("location: add-news.php?newsuploaded=true");
