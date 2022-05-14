<?php

include "connection.php";


salon_database

    $fname = $_POST["fname"];
    $sname = $_POST["sname"];
//    $username = $_POST["username"];
    $emailaddress = $_POST["emailaddress"];
    $password = $_POST["password"];
    $confirmpass = $_POST["confirmpass"];

//validation of password
if (strlen($password)<5){
    $passerror = "Password must have more than 5 character";
    echo $passerror;
}else{
    $storepass = password_hash($password, PASSWORD_DEFAULT);
}

    if ($confirmpass != $password){
        $conpasserr = "Password do not match";
        echo $conpasserr;
    }
    if (empty($conpasserr) and empty($conpasserr)){

        $sql = "INSERT INTO `patient_1`(`fname`, `sname`, `emailaddress`, `password`) 
        VALUES ('$fname]','$sname','$emailaddress','$storepass')";

     $result=  mysqli_query($conn, $sql);

     if ($result){
         echo "You have been registered successfully";
         header("location:login.php");
     }else{
         echo "Error executing query" .mysqli_error($conn);
     }

    }

     mysqli_close($conn);


}




