<?php
include '../../dbconn.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$joiningdate = $_POST['joiningdate'];
$birth = $_POST['birth'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$origin = $_POST['origin'];
$position = $_POST['position'];
$playernumber = $_POST['playernumber'];

$status = 0;
$injurystatus = "OK";
$time = time();
$date = date("y/m/d");

//image
$filename1 = $_FILES['image']['name'];
$filetmpname1 = $_FILES['image']['tmp_name'];
$filedestination1 = "../../playerimages/" . $filename1;
$image = "playerimages/" . $filename1;
move_uploaded_file($filetmpname1, $filedestination1);


$sql = "INSERT INTO players (firstname, lastname, image, email, gender, joiningdate, birth, phone, address, origin, position, playernumber, status, injurystatus, time, date) VALUES ('$firstname', '$lastname', '$image', '$email', '$gender', '$joiningdate', '$birth', '$phone', '$address', '$origin', '$position', '$playernumber', '$status', '$injurystatus', '$time', '$date');";
mysqli_query($conn, $sql);

header("location: index.php?playeradded=true");
