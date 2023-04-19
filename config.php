<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "student_registration_web";

//connect database to variable
$connection = new mysqli($serverName, $userName, $password, $databaseName);

//check database connect or not
if($connection->connect_error){
    die("Connection failed" . $connection->connect_error);
}
echo " ";
?>

