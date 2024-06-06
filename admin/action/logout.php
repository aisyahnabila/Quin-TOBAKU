<?php
session_start();
session_destroy(); // Hapus sesi pengguna

// Arahkan pengguna kembali ke halaman login
header("Location: ../../login.php");
exit();
