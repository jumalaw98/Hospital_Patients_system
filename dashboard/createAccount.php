<?php 
// connection
include('connection.php');
if (isset($_POST['submit'])) {
    $target_dir = __DIR__ ."Images/";
    $patientName=$_POST['patientname'];
    $consultingDoc=$_POST['consultingDoc'];
    $userName=$_POST['userName'];
    $userMail=$_POST['email'];
    $userpass=$_POST['password'];
    $userDob=$_POST['dateofbirth'];
    $usergender=$_POST['gender'];
    $userAddrss=$_POST['address'];
    $userCity=$_POST['city'];
    $userState=$_POST['State'];
    $userPostCode=$_POST['PostalCode'];
    $userPhone=$_POST['phone'];
    //$userPic=$_POST['UserImg'];
	$userPic=$_FILES['UserImg']['name'];
    $userStatus=$_POST['status'];
    $SuccMessage="Account Created Please Login";

$sql = "INSERT INTO patient (patient_name,consultingDoctor,username,email,pssword,dateOfBirth,gender,addrss,city,province,postalCode,phone,UserPic,patientStatus) 
VALUES ('$patientName','$consultingDoc','$userName','$userMail','$userpass','$userDob','$usergender','$userAddrss','$userCity','$userState','$userPostCode','$userPhone','$userPic','$userStatus')";

if ($conn->query($sql)) {
    move_uploaded_file($_FILES['UserImg']['tmp_name'],"Images/".$userPic);
    echo "<script type='text/javascript'>alert('$SuccMessage');</script>";
	echo "<script>location='Login.html'</script>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dreamguys.co.in/preclinic/template/add-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jul 2019 17:14:36 GMT -->
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
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Number vallidation -->
    <script>
        
   function ValidateUSPhoneNumber() {
  var regExp = /^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}/;
  var phone = phoneNumber.match(regExp);
       var userPhone ="<?php echo $userPhone ?>";
  if (phone) {
    alert('yes');
    return true;
  }
  alert('no');
  return false;
}
    </script>
   </head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index.html" class="logo">
					<img src="img/jlchms.logo.png"  alt="">
<!--                    <span>JLC Medical Service</span>-->
				</a>
			</div>
        </div>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Create Account</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form id="myForm" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Name<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="patientname" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Consulting Doctor</label>
                                        <input class="form-control" type="text" name="consultingDoc"required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="userName"required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="dateofbirth" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value="Male" required>Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value="Female" required>Female
											</label>
										</div>
									</div>
                                </div>
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control " name="address" required>
											</div>
										</div>

										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>City</label>
												<input type="text" class="form-control" name="city" required>
											</div>
										</div>
<!--										<div class="col-sm-6 col-md-6 col-lg-3">-->
<!--											<div class="form-group">-->
<!--												<label>State</label>-->
<!--												<input type="text" name="State" id="State"  class="form-control" required>-->
<!--											</div>-->
<!--										</div>-->
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Postal Code</label>
												<input type="number" class="form-control" name="PostalCode" id="PostalCode" required placeholder="Number Only">
											</div>
										</div>
									</div>
								</div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" type="number" id="phone" name="phone" required placeholder="Number Only">
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group">
										<label>Avatar</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
											</div>
											<div class="upload-input">
												<input type="file" class="form-control" name="UserImg">
											</div>
										</div>
									</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Status</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="patient_active" value="Active" required>
									<label class="form-check-label" for="patient_active">
									Active
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="patient_inactive" value="Inactive" required>
									<label class="form-check-label" for="patient_inactive">
									Inactive
									</label>
								</div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="submit"  >Create Account </button>
                            </div>

                            <div class="m-t-20 text-center">
                                I have and account <a href="Login.html">LogIn</a>
<!--                                <button class="btn btn-primary submit-btn" name=""  >Login </button>-->
                            </div>
                        </form>
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
