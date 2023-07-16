<?php
session_start();

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "olap");

// Fungsi untuk memeriksa status admin pengguna
function isAdmin()
{
    if (isset($_SESSION['admin_status']) && ($_SESSION['admin_status'] == 'admin' || $_SESSION['admin_status'] == 'superadmin')) {
        return true;
    } else {
        return false;
    }
}

// Redirect ke halaman pengguna biasa
header("Location: pasien.php");
exit();
