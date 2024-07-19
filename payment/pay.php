<?php 
    include('session.php');
    $ip_add = $_SERVER["REMOTE_ADDR"]; // Using $_SERVER["REMOTE_ADDR"] instead of getenv("REMOTE_ADDR")
    include("db_conn.php");
  

    error_reporting(E_ALL);
  
    // Redirect to login page if user is not logged in
    // if ($user_id == -1) {
    //     header("Location: login.php");
    //     exit;
    // }
?>

<?php
    $rand = rand(100000,999999);
    $trx_id = "HON".$rand;
  
    include('db_conn.php');
    if(isset($_REQUEST['order_uin'])) {
        $sql = "SELECT * FROM cat WHERE order_uin='{$_REQUEST['order_uin']}'"; // Using curly braces for string interpolation
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    }

    if(isset($_SESSION["email"])) {
        $sql = "SELECT * FROM cat WHERE order_uin='{$_REQUEST['order_uin']}'"; // Using curly braces for string interpolation
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $row = mysqli_fetch_array($query);
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $street = $row['street'];
        $city = $row['city'];
        $state = $row['state'];
        $zipcode = $row['zipcode'];
        $phone = $row['phone'];
        $email = $row['email'];
        $order_note = $row['order_note'];
        $ip = $row['ip'];
        $order_uin = $row['order_uin'];
        $_SESSION['order_uin'] = $order_uin;
        $ip = $row['ip'];
    }

    include('db_conn.php');
    $today = date("Y-m-d");
    $ip_add = $_SERVER['REMOTE_ADDR'];
    if(isset($_REQUEST['order_uin'])) {
        $sql = "SELECT SUM(price * qty) AS price FROM cat WHERE order_uin='{$_REQUEST['order_uin']}'"; // Using curly braces for string interpolation
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $price = $row['price'];
            }
        }
    }
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     <title>WrapAndWow | <?php echo $email;?></title>
    <meta name="description" content="WolexAkins Mentoring | DONATION" />
    <meta name="author" content="Wetin Dey Inc." />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/apple-touch-icon.png">



</head>

<body class="gray-bg">


    <div class="middle-box text-center animated fadeInDown">
    <img src="assets/images/logo/honestylogo.png"><br>
               
        <h2>Dear <strong><?php echo $email;?>,</strong></h2>
        <h3>You are about to make payment of <strong style="font-size:20px; color:#DDA508"><span id="naira">N</span><?php echo number_format($price );?></strong></h3>
        
       
         <h3>kindly click the button below to continue. </h3>
        

        <div class="error-desc">
<form>
    <button type="button" onclick="makePayment()" class="btn btn-primary m-t">Pay Now</button>
</form>

<script src="https://dropin.vpay.africa/dropin/v1/initialise.js"></script>

<div class="col-md-12 col-sm-12 col-xs-12" align="center">
    <div class="form-group">
        <img src="img/trusted.png" height="90">
    </div>
</div>

<script>
    function makePayment() {
        const options = {
            amount: <?php echo $price; ?>,
            currency: 'NGN',
            domain: 'https://fearnot.com.ng/',
            key: '686713dc-05c3-46f9-b7a0-045816a4c065',
            email: '<?php echo $email; ?>', // Added quotes around PHP echo
            transactionref: '<?php echo $_SESSION['order_uin']; ?>',
            customer_logo: 'https://www.vpay.africa/static/media/vpayLogo.91e11322.svg',
            customer_service_channel: '+2349070018275, josephabiodun79@gmail.com',
            txn_charge: 6,
            txn_charge_type: 'flat',
            onSuccess: function (response) {
                location.href = 'thanks.php';
            },
            onExit: function (response) {
                location.href = 'failed.php';
            }
        };

        if (window.VPayDropin) {
            const { open, exit } = VPayDropin.create(options);
            open();
        }
    }
</script>


        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
