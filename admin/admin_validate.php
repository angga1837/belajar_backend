<?php
    session_start();
    $username= $_POST["username"];
    $password= $_POST["password"];

    include"../config/db_connection.php";
    $sql= "select * from admin where username='$username' and Password_admin='$password'";
    $result = $conn->query($sql);

    if($row = $result->fetch_assoc()){ 
        $_SESSION["logged-in"]= true;
        $_SESSION["username"]=$row["username"];
        header("Location: admin_home_page.php?page=dashboard");
    }else{
        $_SESSION["salah"] = 'salah';
        header("Location: index.php");
    }
?>