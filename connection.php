<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jlc-hsm";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";

if ($conn == false){
    die("Error connecting to server".mysqli_connect_error($conn));
    }
?>