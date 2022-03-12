<?php

include "connection.php";

    if (isset($_POST["login"])){

        $emailaddress = $_POST["emailaddress"];
        $userpassword = $_POST["password"];

        //comparison from db
        $sql = "SELECT * FROM `patient_1` WHERE emailaddress = '$emailaddress'";
        $result = mysqli_query($conn, $sql);


        if ($result){
            $data = mysqli_num_rows($result);

            if ($data==1){
                while ($row = mysqli_fetch_array($result)){
                    $id = $row["id"];
                    $emailaddress= $row["emailaddress"];
                    $password = $row["password"];

                    //password verification
                    if (password_verify($userpassword,$password)){

                        session_start();
                        $_SESSION ["logined"] = true;
                        $_SESSION ["id"] = $id;
                        $_SESSION ["username"] = $emailaddress;

                        header("location:dashpatients.php");


                    }else{
                        echo "Password aren't matching";
                    }

                }


            }else{
                echo "<p>Your email-address isn't registered</p>";
            }
        }


    }