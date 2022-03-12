<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="img/jlchms.logo.png">
    <title>Jlc Medical Services</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>

<body>
<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="img/jlchms.logo.png"  alt="">
            </a>
        </div>
    </div>
<div class="container border:5px border-dark">
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Create Account</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form id="myForm" action="handle_registration.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="fname" placeholder="Enter First Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Second Name<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="sname" placeholder="Enter Second Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="username" placeholder="Choose User-Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" name="emailaddress" placeholder="Enter Email Address" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password<span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="password" placeholder="password" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm Password<span class="text-danger">*</span></label>
                                    <input class="form-control"  name="confirmpass" placeholder="Confirm Your Password" type="password">
                                </div>
                            </div>

                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn" name="register"  >Register An Account </button>
                        </div>
<hr>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-danger submit-btn" name="gregister"  >Register With Google </button>
                        </div>

                        <div class="m-t-20 text-center">
                            I have and account <a href="Login.html">LogIn</a><br>
                            <a href="">Forgot password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>