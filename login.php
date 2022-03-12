<?php
include "handle_glogin.php";
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="img/jlchms.logo.png">
    <title>JLC Medical Services</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="handle_login.php" class="form-signin" method="post">
						<div class="account-logo">
                            <a href="index.html"><img src="img/jlchms.logo.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" autofocus=""  name="emailaddress" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"  name="userpassword" class="form-control">
                        </div>


                        <div class="form-group text-center">
						<input type="submit" class="btn btn-primary account-btn" value="login" name="login">
                        </div>
                        <hr>
                        <div class="form-group text-center">
                            <button onclick="window.location='<?php echo $login_url;?>'" type="button" class="btn btn-danger rounded-pill">Login with Google</button>
                        </div>
                        <div class="text-center register-link">
                            Don�t have an account? <a href="register.php">Register Now</a><br>
                            <a href="">Forgot password</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

