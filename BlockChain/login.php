<?php
include "service/database.php";

$message = ''; // Variabel untuk menyimpan pesan

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $message = 'Login berhasil!'; // Jika login berhasil
        header("Location: dashboard.php");
    } else {
        $message = 'Username atau password salah!'; // Jika login gagal
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

    <!-- Gambar Kiri -->
    <div class="left-side"></div>

    <!-- Form Login Kanan -->
    <div class="right-side">
        <h1>Login Akun</h1>

        <!-- Alert / Pesan -->
        <?php if (!empty($message)) : ?>
            <div class="alert">
                <?= $message; ?>
            </div>
        <?php endif; ?>

        <!-- Form Login -->
        <form action="login.php" method="POST">
            <input type="text" placeholder="username" name="username" required />
            <input type="password" placeholder="password" name="password" required />
            <button type="submit" name="login">Masuk</button>
        </form>

        <!-- Link Navigasi -->
        <div class="links">
            <a href="index.php">Home</a> | 
            <a href="register.php">Register</a>
        </div>
    </div>

</body>

</html>
