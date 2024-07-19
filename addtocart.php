<?php
include('db_conn.php');
if(isset($_GET['id'])){
    $idd = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM upload WHERE id = '$idd'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
        $user_id = '-1';
        $ip = getenv('REMOTE_ADDR');
        $food = $row['food']; 
        $qty = '1';
        $passport = $row ['passport'];
        $rand= rand(1000,9999);
        $order_uin = date("dmy"). $rand;
        $transaction_uin = $rand.date("dmy");
        $price = $row['price']; // Define $price if needed. Assuming it's empty or not fetched from 'upload' table.
        $status = 'Pending';

        $sql="INSERT INTO cat (user_id, ip, food, price, qty, passport, `status`, `date`, order_uin, transaction_uin) VALUES ('$user_id','$ip','$food','$price','$qty','$passport', '$status',NOW(),'$order_uin','$transaction_uin')";
        if(mysqli_query($conn, $sql)){
            header("location: cart.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>
