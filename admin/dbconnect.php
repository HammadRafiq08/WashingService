<?php
$servername = "localhost";
$username = "ahmer";
$password = "pJgh_x1.n5,0";
$dbName = "cleaningdatabasefile";
// Create connection
$connect = mysqli_connect($servername,$username,$password,$dbName);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);

}
?>