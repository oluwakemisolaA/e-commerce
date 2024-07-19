<?php
include('db_conn.php');
session_start();

// Check if 'email' is set in the session; if not, set it to -1
if (!isset($_SESSION['email'])) {
    $_SESSION['email'] = -1;
}

$user_id = $_SESSION['email'];

if ($user_id !== -1) {
    // User is logged in, retrieve their information from the database
    $sql = "SELECT * FROM user_info WHERE email = '$user_id'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful and fetch user information
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $session_lastname = $row['last_name'];

    } else {
        // Handle the case where the user is logged in but not found in the database
        // You can redirect them to a login page or take appropriate action here
    }
} else {
    // Handle the case where the user is not logged in
    // You can use -1 as a guest user, or handle guest users differently
}
?>
