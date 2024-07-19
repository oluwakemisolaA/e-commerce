
<?php
session_start();
	require('db_conn.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){

		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($conn,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);



	//Checking if user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE email='$email' AND password='$password'";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			echo '<script type="text/javascript"> window.open("../dashboard/category.php","_self");</script>'; // Redirect user to index.php
            }
            else{
    echo "<script>alert('Invalid Admin Login Credential')</script>";
   }
    }
?>



<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Honesty Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <!-- <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"> -->

    <!-- Google fonts -->
    <link href="../../../../../css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">

</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 6 start -->
<div class="login-6">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 bg-img">
                <div class="info">
                    <div class="waviy">
                        <span style="--i:1">W</span>
                        <span style="--i:2">e</span>
                        <span style="--i:3">l</span>
                        <span style="--i:4">c</span>
                        <span style="--i:5">o</span>
                        <span style="--i:6">m</span>
                        <span style="--i:7">e</span> <br>
                        <span class="color-yellow" style="--i:8">t</span>
                        <span class="color-yellow" style="--i:9">o</span> <br>

                        <span style="--i:10">H</span>
                        <span style="--i:11">o</span>
                        <span style="--i:12">n</span>
                        <span style="--i:13">e</span>
                        <span style="--i:13">s</span>
                        <span style="--i:13">t</span>
                        <span style="--i:13">y</span> <br>
                      
                        <span class="color-yellow" style="--i:9">R</span>
                        <span class="color-yellow" style="--i:9">e</span>
                        <span class="color-yellow" style="--i:9">s</span>
                        <span class="color-yellow" style="--i:9">t</span>
                        <span class="color-yellow" style="--i:9">a</span>
                        <span class="color-yellow" style="--i:9">u</span>
                        <span class="color-yellow" style="--i:9">r</span>
                        <span class="color-yellow" style="--i:9">a</span>
                        <span class="color-yellow" style="--i:9">n</span>
                        <span class="color-yellow" style="--i:9">t</span>

                    </div>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p> -->
                </div>
                <div class="bg-photo">
                    <img src="assets/img/img-6.png" alt="bg" class="img-fluid">
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-12 bg-color-6">
                <div class="form-section">
                    <div class="logo">
                        <a href="login-6.html">
                            <!-- <img src="assets/images/logo/honestylogo.png" alt="logo"> -->
                        </a>
                    </div>
                    <h3>Sign Into Your Account</h3>
                    <div class="login-inner-form">
                        <form action="#" method="post">
                            <div class="form-group clearfix">
                                <label for="first_field" class="form-label">Email address</label>
                                <div class="form-box">
                                    <input name="email" type="email" class="form-control" id="first_field" placeholder="Email Address" aria-label="Email Address">
                                    <i class="flaticon-mail-2"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="second_field" class="form-label">Password</label>
                                <div class="form-box">
                                    <input name="password" type="password" class="form-control" autocomplete="off" id="second_field" placeholder="Password" aria-label="Password">
                                    <i class="flaticon-password"></i>
                                </div>
                            </div>
                            <div class="checkbox form-group clearfix">
                                <div class="form-check float-start">
                                    <input class="form-check-input" type="checkbox" id="rememberme">
                                    <label class="form-check-label" for="rememberme">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forgot.php" class="link-light float-end forgot-password">Forgot your password?</a>
                            </div>
                            <div class="form-group clearfix mb-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-theme">Login</button>
                            </div>
                        </form>
                        <div class="extra-login">
                            <!-- <span>Or Login With</span> -->
                        </div>
                        <!-- <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg">Facebook</a></li>
                            <li><a href="#" class="twitter-bg">Twitter</a></li>
                            <li><a href="#" class="google-bg">Google</a></li>
                        </ul> -->
                    </div>
                    <p class="text-center">Don't have an account?<a href="register.php"> Register here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 6 end -->

<!-- External JS libraries -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/app.js"></script>
<!-- Custom JS Script -->

</body>
</html>
