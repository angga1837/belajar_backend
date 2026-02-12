<?php
    session_start();
    $hostname = "localhost";
    $user_db = "root";
    $password_db = "";
    $db_name = "db_webakademis_test";
    $conn = new mysqli($hostname, $user_db, $password_db);
    if ($conn -> connect_error){
        die("Connection Failed:" . $conn -> connect_error);
    }
    else{
        mysqli_select_db($conn, $db_name);
    }
?>