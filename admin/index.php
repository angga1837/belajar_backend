<?php
    include "../config/db_connection.php";
    if (isset($_SESSION["salah"])){
        echo'<script>alert("Username atau password jenengan salah")</script>';
    }
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <div class="login-container">
        <div class="admin-icon">
            <img src="" alt="gambar login admin">
        </div>
        <div class="admin-login-form">
            <form name="login" method="post" action="admin_validate.php">
                <div>
                    <input type="text" name="username" placeholder="Masukkan username" required>
                </div>
                <div>
                    <input type="password" name="password" placeholder="Masukkan password" required>
                </div>
                <div>
                    <input type="submit" name="submit" value="LOGIN">
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>