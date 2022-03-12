<?php

include "vendors/google-api/vendor/autoload.php";

    $gclient = new Google_Client();

    $gclient -> setClientId("1041358055522-u329v2gng35eccbtmi7etg8v5cjun3cd.apps.googleusercontent.com");
    $gclient -> setClientSecret("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");
    $gclient -> setApplicationName("hopspitallogin");
    $gclient -> setRedirectUri("http://localhost/Hospital_Patients_system/dashpatients.php");
    $gclient -> addScope("https://www.googleapis.com/auth/plus.login  https://www.googleapis.com/auth/userinfo.email");

    $login_url = $gclient -> createAuthUrl();

    session_start();

    if (isset($_GET["code"])){

        //exchange the valid token
        $token = $gclient -> fetchAccessTokenWithAuthCode($_GET["code"]);

    if (!isset($token["error"])){

        $gclient -> setAccessToken($token["access_token"]);

        #store token in session
        $_SESSION["access_token"];

        #Get user servises
        $gservices = new Google_Service_Oauth2($gclient);


    }


    }