<?php
require_once './config.php';

$nic = filter_input(INPUT_POST, "nic");
$name = filter_input(INPUT_POST, "name");
$ad = filter_input(INPUT_POST, "address");


/*$sql = "SELECT * FROM student WHERE nic='$nic'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('This nic is already in database')</script>";
        require_once './dashboard.php';
        return;
    } else {
        //require once eka dana nisa page eka aai load wena nisa else part ekk oona na...
    }*/

if (isset($_POST["add"])) {
    
    $sql = "INSERT INTO student (nic, name, address) VALUES ('$nic','$name','$ad')";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "<script>alert('You have successfully registered')</script>";
       require_once './dashboard.php';
    } else {
        echo "<script>alert('Your registration failed')</script>";
        require_once './dashboard.php';
    }
}

