<?php
session_start();
include('db_conn.php');
$user_check=$_SESSION['email'];

$sql = mysqli_query($conn,"SELECT * FROM `admin` WHERE email='$user_check'");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$uin=$row['uin'];
$session_fullname =$row['fullname'];
$session_email = $row['email'];
$session_number = $row['number'];
// $session_s = $row['station'];
$session_passport = $row['passport'];

if(!isset($user_check))
{
header("Location: ../");
}
?>




