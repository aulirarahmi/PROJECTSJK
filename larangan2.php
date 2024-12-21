<?php
session_start();

// Periksa apakah pengguna sudah login, jika belum, arahkan ke halaman login
$isLoggedIn = isset($_SESSION['user_id']);

// Sekarang Anda dapat mengakses data pengguna dari session
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = null; // Atur nilai default jika session belum ada
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Meta viewport untuk responsivitas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rambu Larangan</title>
    <link rel="stylesheet" href="learning.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="index2.html">
                <img src="images/CTK LOGO black.png" alt="Logo Traffic Knowledge">
            </a>
        </div>
        
        <div class="nav-menu">
            <a href="#">Learning</a>
            <a href="#">Quiz</a>
            <a href="#">About us</a>
        </div>
        <div class="nav-buttons">
            <button class="btn-login">Log in</button>
            <button class="btn-signup">Sign Up</button>
        </div>
    </nav>

 
    <!-- Main Content -->
    <main class="container">
        <div class="header">
            <h1>Rambu Larangan</h1>
            <p class="description">teks panjang lebar mengenai rambu peringatan teks panjang lebar mengenai rambu peringatan teks panjang lebar mengenai rambu peringatan teks panjang lebar mengenai rambu peringatan teks panjang lebar mengenai rambu peringatan</p>
        </div>

        <!-- Grid Container -->
        
        <section class="grid-container">
            <div class="content-box">
                <h3>Persimpangan tiga tipe T</h3>
                <img src="images/learningImage.png" alt="Gambar dari database">
                <p>deskripsi nya deskripsi nya deskripsi nya...</p>
            </div>
            <div class="content-box">
                <h3>Ini untuk judul dari database</h3>
                <img src="images/learningImage.png" alt="Gambar dari database">
                <p>deskripsi nya deskripsi nya deskripsi nya...</p>
            </div>
            <div class="content-box">
                <h3>Ini untuk judul dari database</h3>
                <img src="images/learningImage.png" alt="Gambar dari database">
                <p>deskripsi nya deskripsi nya deskripsi nya...</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>create by @PSIII PABW B</p>
    </footer>

    <script src="learning.js"></script>
</body>
</html>