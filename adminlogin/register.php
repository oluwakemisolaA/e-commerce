<?php
// ini_set('display_errors', '1');
	// require 'includes/PHPMailer.php';
	// require 'includes/SMTP.php';
	// require 'includes/Exception.php';
// Define name spaces
	// use PHPMailer\PHPMailer\PHPMailer;
// 	use PHPMailer\PHPMailer\SMTP;
// 	use PHPMailer\PHPMailer\Exception;
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



<?php
        include('db_conn.php');
        $rand= rand(1000,9999);
    
        $today= date("dmy"). $rand;
    
        $ID= "cry". $today . $rand;
    
                            error_reporting(E_ALL);
                            if(isset($_REQUEST["submit"])){
                                $uin=$_REQUEST["uin"];
                                $fullname = trim(addslashes ($_REQUEST["fullname"]));
                                $number= $_REQUEST["number"];
                                $emailreg = $_REQUEST["email"];
                                $password = $_REQUEST["password"];
                                $designation = $_REQUEST["designation"];

                                $passport = $_FILES["passport"]['name'];
                                $target = "passport/";
                                $target = $target.$_FILES["passport"]['name'];

                                $check = mysqli_query($conn, "SELECT * FROM `admin` WHERE email = '$emailreg' OR `number` = '$number' OR uin='$uin'");
                                $checkrows = mysqli_num_rows($check);
                                if($checkrows>0){
                                  echo"<script>alert('user already exist in database')
                                  location.href='index.php'</script>";
                                } else {

                                    if (move_uploaded_file($_FILES["passport"]['tmp_name'],$target)>0){

                                echo "<script>alert('Your Registration is successful')</script>";

                                $sql="INSERT INTO admin (uin, fullname, number, email, passport,password, designation) VALUES ('$uin','$fullname','$number','$emailreg','$passport','$password',' $designation')";
    
                                mysqli_query($conn,$sql) or die (mysqli_error($conn));
                                $num=mysqli_insert_id($conn);
                                if(mysqli_affected_rows($conn)!=1){
                                $message= "Error inserting the application information.";
                                }


                                echo "<script>alert('Your Registration is successful')
                                    location.href='login.php'</script>";        


                                //                         //Create instance of PHPMailer
	// $mail = new PHPMailer();
    // //Set mailer to use smtp
    //     $mail->isSMTP();
    // //Define smtp host
    //     $mail->Host = "mail.wetindeycodeacademy.com.ng";
    // //Enable smtp authentication
    //     $mail->SMTPAuth = true;
    // //Set smtp encryption type (ssl/tls)
    //     $mail->SMTPSecure = "tls";
    // //Port to connect smtp
    //     $mail->Port = "587";
    // //Set gmail username
    //     $mail->Username = "josephabiodun79@wetindeycodeacademy.com.ng";
    // //Set gmail password
    //     $mail->Password = "abiodunojo1$";
    // //Email subject
    //     $mail->Subject = "successful registration";
    // //Set sender email
    //     $mail->setFrom('josephabiodun79@wetindeycodeacademy.com.ng');
    // //Enable HTML
    //     $mail->isHTML(true);
    // //Attachment
    
    
    // //Email body
    //     $mail->Body = "<style>
    //     html,
    //     body {
    //         margin: 0 auto !important;
    //         padding: 0 !important;
    //         height: 100% !important;
    //         width: 100% !important;
    //         font-family: 'Roboto', sans-serif !important;
    //         font-size: 14px;
    //         margin-bottom: 10px;
    //         line-height: 24px;
    //         color: #8094ae;
    //         font-weight: 400;
    //     }
    //     * {
    //         -ms-text-size-adjust: 100%;
    //         -webkit-text-size-adjust: 100%;
    //         margin: 0;
    //         padding: 0;
    //     }
    //     table,
    //     td {
    //         mso-table-lspace: 0pt !important;
    //         mso-table-rspace: 0pt !important;
    //     }
    //     table {
    //         border-spacing: 0 !important;
    //         border-collapse: collapse !important;
    //         table-layout: fixed !important;
    //         margin: 0 auto !important;
    //    
    //     table table table {
    //         table-layout: auto;
    //     }
    //     a {
    //         text-decoration: none;
    //     }
    //     img {
    //         -ms-interpolation-mode:bicubic;
    //     }
    // </style>
    
    // <center style='width: 100%; background-color: #f5f6fa;'>
    //     <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
    //         <tr>
    //            <td style='padding: 40px 0;'>
    //                 <table style='width:100%;max-width:620px;margin:0 auto;'>
    //                     <tbody>
    //                         <tr>
                                // <td style='text-align: center; padding-bottom:25px'>
                                //     <a href='#'><img style='height: 60px' src='https://wetindeycodeacademy.com.ng/wetindeyform/assets/img/favicon.ico' alt='logo'></a>
                                // </td>
    //                         </tr>
    //                     </tbody>
    //                 </table>
    //                 <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
    //                     <tbody>
    //                         <tr>
    //                             <td style='padding: 30px 30px 15px 30px; text-align: center;'>
    //                                 <h2 style='font-size: 18px; color: #84B700; font-weight: 600; margin: 0;'>successful registration</h2>
    //                             </td>
    //                         </tr>
    //                         <tr>
    //                             <td style='padding: 0 30px 20px; text-align: center;'>
    //                                 <p style='margin-bottom: 10px;'>Hi $fullname,</p>
    //                                 <p style='margin-bottom: 10px;'>Your registration was successful on wetindeyform with uin number</p>
    //                                 <h1 style='font-size: 35px; color: #84B700; font-weight: 600; margin: 0;'> $uin </h1>
                                
    //                             </td>
    //                         </tr>
                           
                           
    //                     </tbody>
    //                 </table>
    //                 <table style='width:100%;max-width:620px;margin:0 auto;'>
    //                     <tbody>
    //                         <tr>
    //                             <td style='text-align: center; padding:25px 20px 0;'>
    //                                 <p style='font-size: 13px;'>Copyright © 2024 Abiodun Joseph . All rights reserved. <br> </p>
                                    
    //                                 <p style='padding-top: 15px; font-size: 12px;'>This email was sent to you as a registered user on Abiodun Joseph <a style='color: #84B700; text-decoration:none;' href='#'>wetindey code academy</a>.</p>
    //                             </td>
    //                         </tr>
    //                     </tbody>
    //                 </table>
    //            </td>
    //         </tr>
    //     </table>
    // </center>";
    // //Add recipient
    //     $mail->addAddress("$emailreg");
    // //Finally send email
    //     if ( $mail->send() ) {
    
    
    //   $email = "andersonlizzy103@gmail.com";
    //   $password = "abiodunojo1$";
    //   $message = "Dear $fullname, of $location your experience is $knowledge, your registration was successful, your UIN number is $uin";
    //   $sender_name = "wetindey";
    //   $recipients = $number;
    //   $forcednd = "1";
    
    //   $data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
    //   $data_string = json_encode($data);
    //   $ch = curl_init('https://api.bulksmslive.com/v2/app/sms');
    //   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    //   curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //   curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
    //   $result = curl_exec($ch);
    //   $res_array = json_decode($result);
    // //   print_r($res_array);
    
    //     }

    

                            }
                        }
                    }
                              ?>  





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
                            <!-- <img src="assets/img/logos/logo.png" alt="logo"> -->
                        </a>
                    </div>
                    <h3>Create An Cccount</h3>
                    <div class="login-inner-form">
                        <form action="#"  enctype="multipart/form-data" method="post">
                            <input type="hidden" required name="uin"  value="<?php echo $ID;?>" class="form-control">
                            <div class="form-group clearfix">
                                <label for="third_field" class="form-label">Full Name</label>
                                <div class="form-box">
                                    <input name="fullname" type="text" class="form-control" id="third_field" placeholder="Full Name" aria-label="Full Name">
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="third_field" class="form-label">Phone Number</label>
                                <div class="form-box">
                                    <input name="number" type="number" class="form-control" id="third_field" placeholder="Phone Number" aria-label="Phone Number">
                                    <i class="flaticon-password"></i>
                                </div>
                            </div>
                            
                            <div class="form-group clearfix">
                                <label for="first_field" class="form-label">Email address</label>
                                <div class="form-box">
                                    <input name="email" type="email" class="form-control" id="first_field" placeholder="Email Address" aria-label="Email Address">
                                    <i class="flaticon-mail-2"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="second_field" class="form-label">Passport</label>
                                <div class="form-box">
                                  <input type="file" name="passport" class="form-control">
                                    <i class="flaticon-password"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="second_field" class="form-label">Designation</label>
                                <div class="form-box">
                                    <select name="designation" id="" class="form-control">
                                        <option value="">--Select Designation</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label for="second_field" class="form-label">Password</label>
                                <div class="form-box">
                                    <input name="password" type="password" class="form-control" autocomplete="off" id="second_field" placeholder="Password" aria-label="Password">
                                    <i class="flaticon-password"></i>
                                </div>
                            </div>
                            <div class="form-group checkbox clearfix">
                                <div class="clearfix float-start">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberme">
                                        <label class="form-check-label" for="rememberme">
                                            I agree to the terms of service
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix mb-0">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-theme">Register</button>
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
                    <p class="text-center">Already have an account? <a href="login.php"></a> Login here</a></p>
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
