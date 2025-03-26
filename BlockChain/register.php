<?php
include "service/database.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($db->query($sql)) {
        echo "Registrasi berhasil!";
    } else {
        echo "Registrasi gagal!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

    <!-- Gambar Kiri -->
    <div class="left-side"></div>

    <!-- Form Register Kanan -->
    <div class="right-side">
        <h1>Daftar Akun</h1>

        <form action="register.php" method="POST">
            <input type="text" placeholder="username" name="username" required />
            <input type="password" placeholder="password" name="password" required />
            <button type="submit" name="register">Daftar</button>
        </form>

        <div class="links">
            
            <a href="index.php">Login</a>
        </div>
    </div>

</body>

</html>
