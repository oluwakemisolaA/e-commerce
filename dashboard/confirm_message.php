<?php
include('db_conn.php');
ini_set('display_errors', '1');
        require 'includes/PHPMailer.php';
        require 'includes/SMTP.php';
        require 'includes/Exception.php';
    // Define name spaces
        use PHPMailer\PHPMailer\PHPMailer;
    	use PHPMailer\PHPMailer\SMTP;
    	use PHPMailer\PHPMailer\Exception;

if(isset($_REQUEST['id'])){
    $sql="SELECT * FROM msg WHERE id='$_REQUEST[id]'";
    $result= mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($result);
    $email = $row['email'];
    $name = $row['name'];

    
    

?>

<?php





                                                        //Create instance of PHPMailer
	$mail = new PHPMailer();
    //Set mailer to use smtp
        $mail->isSMTP();
    //Define smtp host
        $mail->Host = "mail.wetindeycodeacademy.com.ng";
    //Enable smtp authentication
        $mail->SMTPAuth = true;
    //Set smtp encryption type (ssl/tls)
        $mail->SMTPSecure = "tls";
    //Port to connect smtp
        $mail->Port = "587";
    //Set gmail username
        $mail->Username = "josephabiodun79@wetindeycodeacademy.com.ng";
    //Set gmail password
        $mail->Password = "abiodunojo1$";
    //Email subject
        $mail->Subject = "successful registration";
    //Set sender email
        $mail->setFrom('josephabiodun79@wetindeycodeacademy.com.ng');
    //Enable HTML
        $mail->isHTML(true);
    //Attachment
    
    
    //Email body
        $mail->Body = "<style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
       
        table table table {
            table-layout: auto;
        }
        a {
            text-decoration: none;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
    </style>
    
    <center style='width: 100%; background-color: #f5f6fa;'>
        <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f5f6fa'>
            <tr>
               <td style='padding: 40px 0;'>
                    <table style='width:100%;max-width:620px;margin:0 auto;'>
                        <tbody>
                            <tr>
                                <td style='text-align: center; padding-bottom:25px'>
                                    <a href='#'><img style='height: 60px' src='https://wetindeycodeacademy.com.ng/wetindeyform/assets/img/favicon.ico' alt='logo'></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
                        <tbody>
                            <tr>
                                <td style='padding: 30px 30px 15px 30px; text-align: center;'>
                                    <h2 style='font-size: 18px; color: #84B700; font-weight: 600; margin: 0;'>successful registration</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 30px 20px; text-align: center;'>
                                    <p style='margin-bottom: 10px;'>Hi $name,</p>
                                    <p style='margin-bottom: 10px;'>Thankyou, your complain has been solved </p>
                                    <h1 style='font-size: 35px; color: #84B700; font-weight: 600; margin: 0;'></h1>
                                
                                </td>
                            </tr>
                           
                           
                        </tbody>
                    </table>
                    <table style='width:100%;max-width:620px;margin:0 auto;'>
                        <tbody>
                            <tr>
                                <td style='text-align: center; padding:25px 20px 0;'>
                                    <p style='font-size: 13px;'>Copyright © 2024 Abiodun Joseph . All rights reserved. <br> </p>
                                    
                                    <p style='padding-top: 15px; font-size: 12px;'>Thanks for your patronage <a style='color: #84B700; text-decoration:none;' href='#'>We hope to see you soon</a>.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
               </td>
            </tr>
        </table>
    </center>";
    //Add recipient
        $mail->addAddress("$emailreg");
    //Finally send email
        if ( $mail->send() ) {
    



$sql="UPDATE msg SET `status`='confirmed' WHERE id=$_REQUEST[id]";
if(mysqli_query($conn, $sql)){
echo "<script>alert('participant succesfully confirmed')
location.href='view.php'</script>";
}
else{
    echo "error deleting record:".mysqli_error($conn);

}
mysqli_close($conn);



        }
}
?>