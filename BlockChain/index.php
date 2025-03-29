<?php
include "service/database.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        header("Location: dashboard.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockChain</title>
    <link rel="stylesheet" href="stylesheet1.css">
</head>

<body>
    <!-- Video  -->
    <video autoplay muted loop class="left-side">
        <source src="konten/blockchain.mp4" type="video/mp4">
        Browser Anda tidak mendukung video HTML5.
    </video>

    <!-- Form Login -->
    <div class="right-side">
        <h1>Selamat Datang Di pembelajaran BlockChain</h1>
        
        <!-- Form Login -->
        <form action="login.php" method="POST">
            <div class="links">
                <a href="index.php">Home</a> |
                <a href="register.php">Register</a>
            </div>
            <input type="text" placeholder="username" name="username" required />
            <input type="password" placeholder="password" name="password" required />
            <button type="submit" name="login">Masuk</button>
        </form>
    </div>
</body>

</html>
