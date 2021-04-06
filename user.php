<?php
$server="localhost";
$username="root";
$password=""; 

$con = mysqli_connect($server, $username, $password);

 mysqli_select_db($con, 'gitProject1');

$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];


    $query = "INSERT INTO `contactus` (`name`, `email`, `phonenumber`, `message`, `datetime`) 
    VALUES ('$name', '$email', '$phonenumber', '$message', current_timestamp())";

   mysqli_query($con, $query);
$con->close();
header('location:index.html');

?>