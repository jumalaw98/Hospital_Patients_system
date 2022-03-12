<?php

$connect = mysqli_connect("localhost","root","","jlc-hsm");

if ($connect == false){
    die("Error connecting to server".mysqli_connect_error($connect));
}
// CHECKING THE DATABASE CONNECTION
//if(mysqli_connect_errno()){
//    echo "Connection Failed".mysqli_connect_error();
//    exit;
//}
//else{
//    echo "The database is successfully connected";
//}
//
//
//// Check connection
//if (!$connect) {
//die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
?>

