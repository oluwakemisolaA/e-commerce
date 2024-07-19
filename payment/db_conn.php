<?php

$conn = new mysqli("localhost", "project_user", "abiodunojo@2024", "project_db");

if  (mysqli_connect_errno()) {
    printf("connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>