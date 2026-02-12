<?php
// 1. Memulai session (Wajib ada di setiap halaman yang menggunakan $_SESSION)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Cek apakah variabel session "logged-in" sudah ada atau belum
// Kita juga cek apakah nilainya true
if (!isset($_SESSION["logged-in"]) || $_SESSION["logged-in"] !== true) {
    
    // 3. Jika tidak ada session, lempar user kembali ke halaman login
    // Sesuaikan path ini dengan lokasi file login kamu
    header("Location: ../index.php?error=not_logged_in");
    exit(); // Menghentikan eksekusi script agar kode di bawahnya tidak jalan
}
?>